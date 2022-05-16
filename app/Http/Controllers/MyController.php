<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function xinchao(){
        echo "xin chào";
    }

    public function id($ten)
    {
        echo "em tên là: ".$ten;
        return redirect()->route("route2");
    }

    public function myrequest(Request $request)
    {
        if($request->isMethod("post"))
            echo "dung";
        else
            echo "sai";
    }

    public function getForm(Request $request)
    {
       echo $request->hoten;
    }

    public function setCookie()
    {
        $response = new Response();
        $response->withCookie("HoangDuc", "Bố của các player", 0.5);
        echo "đã set thành công";
        return $response;
    }

    public function getCookie(Request $request)
    {
        echo "kết quả: ";
        return $request->cookie("HoangDuc");
    }

    public function postFile(Request $request)
    {
        if($request->hasFile("upFile")){
            $file = $request->file("upFile");
            if($file->getClientOriginalExtension()=="JPG"){
                echo "là file jpg";
            }else{
                echo"không phải file ";
            }
            $filename = $file->getClientOriginalName("upFile");
            $file->move("img",$filename);
            echo $filename;
        }
        else{
            echo "không có file";
        }
    }

    public function Json()
    {
        $array = ['1'=> '2'];
        //return $array;
        return response()->json($array);
    }
}
