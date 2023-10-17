<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Multistepform extends Component
{
    use WithFileUploads;

    public $email;
    public $phone;
    public $country;
    public $detail;
    public $cv;

    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multistepform');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'email'=>'required|email',
                'country'=>'required',
                'phone'=>'required|numeric|digits:10',

            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'detail'=>'required',
              ]);
        }
    }

    public function register(){
        $this->resetErrorBag();
        $this->validate([
            'cv'=>'required|mimes:doc,docx,pdf|max:1024',
        ]);
          

        $cv_name = 'CV_'.$this->cv->getClientOriginalName();
        // $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

        if($cv_name) {
            $values = array(
                "email"=>$this->email,
                "phone"=>$this->phone,
                "country"=>$this->country,
                "detail"=>$this->detail,
                "cv"=>$cv_name,
            );

            $data = ['email'=>$this->email, 'phone' => $this->phone, "country"=>$this->country,"detail"=>$this->detail, 'cv' => $cv_name];
            return redirect()->route('register.success', $data);
        }
    }
}
