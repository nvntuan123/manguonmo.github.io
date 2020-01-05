<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Slide;
use App\ProductType;
use App\Cart;
use Session;
use Hash;
use Auth;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(4);
        return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));

    }

    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        $loai = ProductType::all();
        $loai_sp = ProductType::where('id',$type)->first();
        return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }

    public function getChitiet(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        return view('page.chitiet_sanpham',compact('sanpham'));
    }

    public function getLienHe(){
        return view('page.lienhe');
    }

    public function getGioiThieu(){
        return view('page.gioithieu');
    }

    public function getLogin(){
        return view('page.dangnhap');
    }

    public function getSignup(){
        return view('page.dangky');
    }

    public function getDashboard(){
        $new_product = Product::where('id_type',1)->paginate(12);
        $sanpham_khuyenmai = Product::where('id_type',2)->paginate(12);
        $quanshort = Product::where('id_type',3)->paginate(12);
        $quanjean = Product::where('id_type',4)->paginate(12);
        $quankaki = Product::where('id_type',5)->paginate(12);
        return view('page.a-dashboard',compact('new_product','sanpham_khuyenmai','quanshort','quanjean','quankaki'));
    }

    public function getEditsp($id){
        $product = Product::findOrFail($id);
        return view('page.editsanpham',compact('product'));
    }
    public function postEditsp(Request $req, $id){
        $product = Product::find($id);
        $product->unit_price = $req->unitprice;
        $product->promotion_price = $req->promotionprice;
        $product->description = $req->description;
        $product->image = $req->img;
        $product->save();
        return redirect()->route('admin');
    }

    public function getXoa($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin');
    }

    public function getAddsp(){
        return view('page.addsanpham');
    }

    public function postAddsp(Request $req){

        $product = new Product();
        $product->name = $req->namesanpham;
        $product->id_type = $req->loaisanpham;
        $product->unit_price = $req->unitprice;
        $product->promotion_price = $req->promotionprice;
        $product->description = $req->description;
        $product->image = $req->img;
        $product->save();
        return redirect()->route('admin');
    }

    public function postSignup(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        $user = User::where([
            ['email','=',$req->email],
//            ['status','=','1']
        ])->first();

        if($user){
            if(Auth::attempt($credentials)){

                return redirect()->route('trang-chu');
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']);
        }

    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    public function getSearch(Request $req){
        $product = Product::where('name','like','%'.$req->key.'%')
                            ->orWhere('unit_price',$req->key)
                            ->get();
        return view('page.search',compact('product'));
    }


    
}
