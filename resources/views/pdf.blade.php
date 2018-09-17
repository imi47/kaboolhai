<div class="modal wow fadeInDown" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" style="box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.1), 0 6px 20px 0 rgba(0,0, 0, 0.1)";>
    <div class="modal-dialog modal-lg" style="box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.5), 0 6px 20px 0 rgba(0,0, 0, 0.5);">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color:#662e90;color:#ffffff;border-bottom:3px solid #ED6C05;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                 <img src="{{ $user_assets }}/KH-logo-final-file.png" >
              </div>
              <div class="col-sm-6 text-right" style="margin-top: 13px;">
                <p style="padding-right: 23px;">Visit Us: www.kaboolhai.com</p>
                  <p class="subhead">Support: admin@kaboolhai.com</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="text-align:justify;">

          <div class="container">
            
            

            <div class="row">
              <div class="col-sm-12">
                <p class="werse">"And do not mix the truth with falsehood or conceal the truth while you know [it]". {Quran 2:42}.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <p class="hadees">Abdullah reported Allah’s Messenger (peace be upon him) as saying: Truth leads one to Paradise and virtue leads one to Paradise and the person tells the truth until he is recorded as truthful, and lie leads to obscenity and obscenity leads to Hell, and the person tells a lie until he is recorded as a liar. {Sahih Muslim – Book 32 Hadith 6307}.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <p>Before we proceed, we need you to agree to the undertaking given below. This oath is a testimony that you are a Muslim and agree to our website’s terms and conditions;</p>
                <p class="oathfs">I <span class="username"><u><strong>{{ $fname.' '.$lname }}</strong></u></span> hereby testify that I only worship <strong>Allah</strong> and none other!</p>
                <ul>
                  <li class="pointlist"> I testify that whatever information I have provided is true to my knowledge and I have truly explained who I am.</li>
                  <li class="pointlist"> I understand that this website is meant for the serious and sacred relationship of Nikah and I am only seeking the candidates with this intention. </li>
                  <li class="pointlist"> I do not attempt to mislead or misguide anyone nor will I misuse this website for any other purpose than seeking a life partner for Nikah according to Islamic laws.</li>
                  <li class="pointlist"> I understand that my activities on ‘Kabool Hai’ are closely monitored so any unethical behaviour may result in the removal of my account from this website. </li>
               </ul> 
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <p><strong><u>Note:</u></strong> This oath will remain between you and us. It will not be disclosed or exhibited to other members of <strong>‘Kabool Hai’</strong>. It is meant to ensure the safety and trustworthiness of your profile so that this website is not used for unethical and un-Islamic practices. Our sole purpose is to provide you with a reliable Islamic platform to build long-term life relationship based on the sacred bond of <strong>‘Nikah’</strong> and prevent the spread of illegitimate relationships.</p>               
              </div>           
            </div>

            
              
          <div class="row">
            <div class="col-sm-12"> 
              <li class="row listtopmarg" id="oth_cnic">
                    <div class="col-3">
                      <label for="">CNIC <span class="imporatant">*</span></label>
                    </div>
                    <div class="col-8">
                      <span class="colons">:</span>
                          <h4>CNIC *  {{ $oth->cnic }}</h4>
                        Kindly fill your CNIC number if you are a visitor from Pakistan.</p>
                    </div>
                  </li>

                  <li class="row listtopmarg" id="oth_pass_no">
                    <div class="col-3">
                      <label for="">Passport No. or SSN </label>
                    </div>
                    <div class="col-8">
                     
                  
                 
                      <h4>Passport No. {{ $oth->pasport_no }}</h4>
                    If you are from any other country, kindly fill in your Passport Number or Social Security Number (SSN).</p>
                    </div>
                  </li><div class="btpad"></div>

                  <div class="btpad"></div>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-12">
                <p>We give you a guarantee that your CNIC, Passport Number or Social Security Number will not be shown to other members or visitors of the website. It is only visible to us.</p>
              </div>
            </div>
                
             <div class="row">
               <div class="col-sm-12 finalinfo">
                 <p class="ppp"><strong>Username </strong><span>:</span> <span {{ $oth->user_name }}></span> </p>
                 <p class="ppp"><strong>Email   </strong><span>:</span> {{ $oth->email }}</p>
                 <p class="ppp"><strong>D.O.B   </strong><span>:</span> <span {{ $oth->day }}></span>-<span {{ $oth->month }}></span>-<span {{ $oth->year }}></span></p>
                 <p class="ppp"><strong>Phone   </strong><span>:</span><span {{ $oth->phone_code }}></span><span {{ $oth->phone }}></span>-<span id="oth_phone"></span></p>
               </div>
             </div> 

             <div class="row">
               <div class="col-sm-12 text-right">
                 <p><strong>Dated </strong>: {{ date("d-m-y") }}</p>
               </div>
             </div>

             <div class="row">
               <div class="col-sm-12 text-center" >
                 <p><input type="checkbox"> I have read and agreed to the T&C and Privacy Policy</p>
               </div>
             </div>      
              
            
          </div>
        </div>



