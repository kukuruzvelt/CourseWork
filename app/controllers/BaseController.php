<?php
class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    public function test()
    {
        return View::make('child');
    }

    private function processLang($lang){
        try {App::setLocale($lang);}
        catch (Exception $e){
        }
    }

    public function main($lang){
        $this->processLang($lang);
        return View::make('main');
    }

    public function register($lang){
        $this->processLang($lang);
        $email = Request::only('email')['email'];
        $name = Request::only('name')['name'];
        if(User::insertUser($email, $name)){
            return Redirect::to('/main/'.$lang.'#success');
        }
        return Redirect::to('/main/'.$lang.'#error');
    }

    public function services($lang){
        $this->processLang($lang);
        return View::make('services');
    }

    public function casual($lang){
        $this->processLang($lang);
        return View::make('casual');
    }

    public function formal($lang){
        $this->processLang($lang);
        return View::make('formal');
    }

    public function accessories($lang){
        $this->processLang($lang);
        return View::make('accessories');
    }

    public function repair($lang){
        $this->processLang($lang);
        return View::make('repair');
    }



//    public function getServicesForMaster($master_id){
//        return View::make('services', ['mas' => User::services($master_id)]);
//    }
//
//    public function getMastersForService($user_id){
//        return View::make('masters', ['mas' => Service::users($user_id)]);
//    }
//
//    public function getServices(){
//        return View::make('services', ['mas' =>
//            Service::all()]);
//    }
//
//    public function getMasters(){
//        return View::make('masters', ['mas' => User::all()]);
//    }
//
//    public function insertService($name, $price){
//        Service::insertService($name, $price);
//        return View::make('hello');
//    }
//
//    public function insertUser($name, $surname){
//        User::insertUser($name, $surname);
//        return View::make('hello');
//    }

}
