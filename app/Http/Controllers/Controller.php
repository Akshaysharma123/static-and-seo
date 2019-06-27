<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Events\SubscribeEvent;
use App\Events\ContactUsEvent;
use Illuminate\Http\Request;
use App\Quote;
use App\Resume;
use App\Subscriber;
use Validator;
use Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $quote,$sendResume,$subscribers;
    public function __construct()
    {
        $this->quote=new Quote;
        $this->sendResume=new Resume;
        $this->subscribers=new Subscriber;
    }
    public function contact_us(Request $request){
       
        if ($request->isMethod('post')) {
           // event(new ContactUs($request));
            //event(new ContactUsReply($request));
            return response()->json(['code'=>200,'message'=>'Your message has been sent.']);
        }else{
            return abort('404');
        }
    }
    public function requestQuote(Request $request){
      
        if($request->isMethod('post')){

        
        $rules = [
            'email' => 'required|max:255',
            'contact_person' => 'required|max:255',
            'product' => 'required',
        ];
        $messages = [
            'email.required' => 'Please enter valid email.',
            'contact_person.required' => 'Please enter your name.',
            'product.required' => 'Select at at least one services.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return response()->json(['code'=>404,'message'=>$msg]);
        } else {
            $data=$request->all();
            $data['project_start_date']=date('Y-m-d',strtotime($request->project_start_date));
            if ($request->hasFile('attachment')) {
                if($request->file('attachment')->isValid()) {
                    try {
                        $file = $request->file('attachment');
                        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                        $request->file('attachment')->move(base_path('app/attachments/'), $name);
                    } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                        return response()->json(['code'=>404,'message'=>'error']);
                    }
                }
            }
            $res = $this->quote->create($data);
            if ($res) {
            
                return response()->json(['code'=>200,'message'=>'Your message has been sent.']);

            } else {
                return response()->json(['code'=>404,'message'=>'Oops, something went wrong, please try again.']);
            }


        }
    }else{
        return abort('404');
    }
    }
    public function postResume(Request $request){
      if($request->isMethod('post')){
        $rules = [
            'email' => 'required|max:255',
            'name' => 'required|max:255',
           
            'post' => 'required',
        ];
        $messages = [
            'email.required' => 'Please enter valid email.',
            'name.required' => 'Please enter your name.',
            'post.required' => 'Select at at least one post.',
            
        ];
       
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return response()->json(['code'=>404,'message'=>$msg]);
        } else {
           
            if ($request->hasFile('resume')) {
               
                if($request->file('resume')->isValid()) {
                    try {
                        
                        $file = $request->file('resume');
                        $name = date('dmYHis') . '.' . $file->getClientOriginalExtension();
                        $request->file('resume')->move(base_path('app/attachments/'), $name);
                    } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                        return response()->json(['code'=>404,'message'=>$e->getMessage()]);
                    }
                }
            }
            $res = $this->sendResume->create($request->all());
            if ($res) {
            
                return response()->json(['code'=>200,'message'=>'Your resume has been sent.']);

            } else {
                return response()->json(['code'=>404,'message'=>'Oops, something went wrong, please try again.']);
            }


        }
    }else{
        return abort('404');
    }
    }
    public function postSubscriber(Request $request){
      if($request->isMethod('post')){
        $rules = [
            'email' => 'required|max:255',
            
        ];
        $messages = [
            'email.required' => 'Please enter valid email.',
           
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return response()->json(['code'=>404,'message'=>$msg]);
        } else {
            if($this->checkSubscriberEmail($request->email)){
                return response()->json(['code'=>201,'message'=>'Your are already subscribed.']);
            
            }else{
                $res = $this->subscribers->updateOrCreate(  ['email' => $request->email],
                ['status' => 1]);
                event(new SubscribeEvent('hero'));
           }
           
            if ($res) {            
                return response()->json(['code'=>200,'message'=>'Your are successfully subscribed.']);

            } else {
                return response()->json(['code'=>404,'message'=>'Oops, something went wrong, please try again.']);
            }


        }
    }
        else{
            return abort('404');
        }
    }
    public function checkSubscriberEmail($email){
        if($this->subscribers->where([['email','=',$email],['status','=',1]])->first()){
        return true;
        }return false;
    }
   
}
