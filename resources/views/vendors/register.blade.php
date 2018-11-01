@extends('template')

@section('title', 'Vendor Register | OWM')

@section('content')

<body class="animsition">
	<div class="page-wrapper">
        <div class="page-content--bge5-register">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        @include('partials.messages')
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{URL::asset("images/icons/logo-01.png")}}" alt="OWM">
                            </a>
                        </div>
                        <div class="login-form">
                            <div class="text-center m-b-10">
                                <h4 class="adapt">"Grow Your Business with OWM"</h4>
                                <h6 class="adapt">Sign in to access your Dashboard</h6>
                            </div>
                            {!! Form::open(['route'=>'vendor.register']) !!}
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    {{Form::text('name',null,['class'=>'au-input au-input--full', 'type'=>'text', 'placeholder'=>'Your Name*' ])}}
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{Form::email('email',null,['class'=>'au-input au-input--full', 'placeholder'=>'Your Email*'])}}
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('brand_name') ? ' has-error' : '' }}">
                                    {{Form::text('brand_name',null,['class'=>'au-input au-input--full', 'placeholder'=>'Brand Name*'])}}
                                    @if ($errors->has('brand_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('service_id') ? ' has-error' : '' }}">
                                <select class="form-control au-input--full" name="service_id">
                                	<label>Vendor Type</label>
				                    <option value=''>Select Vendor Type*</option>
				                    @foreach($servicesmenu as $service)
				                    <option value='{{$service->id}}'>{{$service->name}}</option>
				                    @endforeach
				                  </select>
                                  @if ($errors->has('service_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('service_id') }}</strong>
                                    </span>
                                    @endif
				              	</div>
				              	<div class="form-group {{ $errors->has('location_id') ? ' has-error' : '' }}">
                                <select class="form-control au-input--full" name="location_id">
				                    <option value=''>City (choose your base city here)*</option>
				                    @foreach($locationsmenu as $location)
				                    <option value='{{$location->id}}'>{{$location->name}}</option>
				                    @endforeach
				                  </select>
                                  @if ($errors->has('location_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location_id') }}</strong>
                                    </span>
                                    @endif
				              	</div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    {{Form::password('password',['class'=>'au-input au-input--full','placeholder'=>'Password*'])}}
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    {{Form::password('password_confirmation',['class'=>'au-input au-input--full','placeholder'=>'Confirm Password*'])}}
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree"><a href="#" data-toggle="modal" data-target="#termsModal">Agree to the terms and policy</a>
                                    </label>
                                </div>
                                {{Form::submit('Register',['class'=>'au-btn au-btn--block au-btn--green'])}}
                                <!--<div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div>-->
                            {!! Form::close() !!}
                            <div class="register-link text-right m-b-20">
                                <p>
                                    Already have account?
                                    <a href="{{route('login.vendor')}}">Sign In</a>
                                </p>
                            </div>
                            <div class="card card-body bg-light">
                                <p>Are you a customer?</p>
                                 <a href="/user/login" class="btn-block btn-primary btn">Customer Sign In
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 termsx">
            <p>
"OnlineWeddingMart" or "we") is a wedding website that provides valuable wedding-related information for the modern prospective couple. The services offered by us include the OnlineWeddingMart websites located at OnlineWeddingMart.com or any sub domain of OnlineWeddingMart.com (the "OnlineWeddingMart Website"), and any other feature, content or applications offered from time to time by OnlineWeddingMart in connection with the OnlineWeddingMart Website whether accessed directly or through our application for mobile devices (collectively, the "OnlineWeddingMart Services").
These Terms of Use (this "Agreement") set forth the legally binding terms for your use of the OnlineWeddingMart Services. By using the OnlineWeddingMart Services, whether as a "Visitor" (meaning you simply browse the OnlineWeddingMart website) or as a "User" (meaning you have registered with and/or submitted content to the OnlineWeddingMart website either as an individual or as a company), you agree to be bound by this Agreement and the OnlineWeddingMart Privacy Policy located at www.OnlineWeddingMart.com/privacy. This Agreement includes your rights, obligations and restrictions regarding your use of the OnlineWeddingMart Services, please read it carefully. If you do not agree with the Terms of this Agreement, you should leave the OnlineWeddingMart Website and discontinue use of the OnlineWeddingMart Services immediately. If you wish to become a User, submit content, video or images, communicate with other Users and generally make use of the OnlineWeddingMart Services, you must read this Agreement and indicate your acceptance during the content submission process.</p>
<p>
    <br>
OnlineWeddingMart may modify this Agreement from time to time and each modification will be effective when it is posted on the OnlineWeddingMart Website. You agree to be bound to any changes to this Agreement through your continued use of the OnlineWeddingMart Services. You will not be notified of any modifications to this Agreement so it is important that you review this Agreement regularly to ensure you are updated as to any changes.</p>
<p>
    <br>
WE URGE YOU TO THINK BEFORE YOU UPLOAD, SUBMIT OR EMBED CONTENT. THIS AGREEMENT PERMITS YOU TO UPLOAD TO , SUBMIT TO OR EMBED ON THE OnlineWeddingMart SERVICES ONLY PHOTOS OR OTHER CONTENT THAT YOU OWN THE COPYRIGHT TO OR OTHERWISE HAVE THE RIGHT TO PUBLISH. BY UPLOADING, SUBMITTING OR EMBEDDING PHOTOS OR OTHER CONTENT THAT YOU DO NOT OWN THE COPYRIGHT TO OR DO NOT OTHERWISE HAVE THE RIGHT TO PUBLISH, YOU MAY SUBJECT YOURSELF TO LEGAL LIABILITY (SEE E.G., SECTIONS 4, 5 AND 6 BELOW). IT IS YOUR RESPONSIBILITY TO ENSURE YOU HAVE ADEQUATE RIGHTS TO PUBLISH TO THE OnlineWeddingMart SERVICES ALL PHOTOS AND OTHER CONTENT YOU POST.</p><br>
<p>
   <h6> 
Eligibility</h6>

Use of the OnlineWeddingMart Services is void where prohibited. By registering, you (i) represent and warrant that you have the right, authority, and capacity to enter into and to fully abide by all of the terms and conditions of this Agreement, and (ii) agree to comply with all applicable domestic and international laws, statutes, ordinances and regulations regarding your use of the OnlineWeddingMart Services</p><br>

<p>
   <h6>
Term</h6>

This Agreement shall remain in full force and effect while you use the OnlineWeddingMart Services or are a User/ Vendor on the website. OnlineWeddingMart may terminate your use of the OnlineWeddingMart Website or the OnlineWeddingMart Services, in its sole discretion, for any reason or no reason whatsoever, at any time, without warning or notice to you.</p><br>
<p>
    <h6>
User Content</h6>
OnlineWeddingMart does not claim any ownership rights in the text, files, images, photos, video, sounds, musical works, works of authorship, or any other materials (collectively, "User Content") that you upload to, submit to, or embed on the OnlineWeddingMart Services. You represent and warrant that you own the User Content posted by you on or through the OnlineWeddingMart Services or that you otherwise have sufficient right, title and interest in and to such User Content to grant OnlineWeddingMart the licenses and rights set forth below without violating, infringing or misappropriating the privacy rights, publicity rights, copyrights, contract rights, intellectual property rights or any other rights of any person. You agree to pay for all royalties, fees, and any other monies owing any person by reason of any User Content posted by you to or through the OnlineWeddingMart Services
After posting, uploading or embedding User Content to the OnlineWeddingMart Services, you continue to retain such rights in such User Content as you held prior to posting such User Content on the OnlineWeddingMart Services and you continue to have the right to use your User Content in any way you choose. However, by displaying or publishing ("posting") any User Content on or through the OnlineWeddingMart Services, you hereby grant to OnlineWeddingMart a non-exclusive, royalty-free, transferable, sublicensable, worldwide license to use, display, reproduce, adapt, modify (e.g., re-format), re-arrange, and distribute your User Content through any media now known or developed in the future. Photographs used on the OnlineWeddingMart Services on in any OnlineWeddingMart publication will include attribution to the photographer and/or copyright holder
Without this license, OnlineWeddingMart would be unable to provide the OnlineWeddingMart Services or its publications. For example, the license you grant to OnlineWeddingMart is non-exclusive (meaning you are free to license your Content to anyone else in addition to OnlineWeddingMart), fully-paid and royalty-free (meaning that OnlineWeddingMart is not required to pay you for the use of the User Content that you post), sublicensable (so that OnlineWeddingMart is able to use its affiliates and subcontractors such as Internet content delivery networks to provide the OnlineWeddingMart Services), and worldwide (because the Internet and the OnlineWeddingMart Services are global in reach)
This license will terminate at the time you remove your User Content from the OnlineWeddingMart Services except as to any User Content that OnlineWeddingMart has sublicensed prior to your removal of your User Content from the OnlineWeddingMart Services, which license shall continue in perpetuity.. To remove User Content, please send a request to info@OnlineWeddingMart.com and include a brief description of the item(s) to be removed along with a URL of the item(s) current location on the OnlineWeddingMart Website. We will remove the item(s) as quickly as possible
The OnlineWeddingMart Services contain Content owned by OnlineWeddingMart ("OnlineWeddingMart Content"). OnlineWeddingMart Content is protected by copyright, trademark, patent, trade secret and other laws, and OnlineWeddingMart owns and retains all rights in the OnlineWeddingMart Content and the OnlineWeddingMart Services. OnlineWeddingMart hereby grants you a limited, revocable, non-sublicensable license to view the OnlineWeddingMart Content (excluding any software code) solely for your personal use in connection with viewing the OnlineWeddingMart Website and using the OnlineWeddingMart Services. Without limiting the generality of the foregoing, you agree that you shall not copy, modify, translate, publish, broadcast, transmit, license, sublicense, assign, distribute, perform, display, or sell any OnlineWeddingMart Content appearing on or through the OnlineWeddingMart Services
The OnlineWeddingMart Services contain Content of other Users and other OnlineWeddingMart licensors ("Third Party Content") and you are permitted to access the Third Party Content solely for your personal use in connection with viewing the OnlineWeddingMart Website and using the OnlineWeddingMart Services. Without limiting the generality of the foregoing, you agree that you shall not copy, modify, translate, publish, broadcast, transmit, license, sublicense, assign, distribute, perform, display, or sell any Third Party Content appearing on or through the OnlineWeddingMart Services</p><br>
<p>
    <h6>
Prohibited Content</h6>
OnlineWeddingMart reserves the right, in its sole and absolute discretion, to determine whether User Content is appropriate; and to remove any User Content, without notice or liability to you, which it determines to be inappropriate. Without limiting the generality of the foregoing, the following is a partial list of the types of User Content that OnlineWeddingMart deems to be inappropriate
Content that criticizes a business or individual beyond that of merely offering an opinion
Content that harasses or advocates harassment of another person
Content that exploits people in a sexual or violent manner
Content that contains nudity, violence, or offensive subject matter or contains a link to an adult website
Content that includes racially, ethically, or otherwise objectionable language
Content that is libelous, defamatory, or otherwise tortious language
Content that solicits personal information from anyone under 18
Content that promotes information that you know is false or misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libelous
Content that promotes an illegal or unauthorized copy of another person’s copyrighted work, such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files
Content that involves the transmission of "junk mail," "chain letters," or unsolicited mass mailing, instant messaging, "spimming," or "spamming"
Content that contains restricted or password only access pages or hidden pages or images (those not linked to or from another accessible page
Content that furthers or promotes any criminal activity or enterprise or provides instructional information about illegal activities including, but not limited to making or buying illegal weapons, violating someone’s privacy, or providing or creating computer viruses
Content that solicits passwords or personal identifying information for commercial or unlawful purposes from other Users
Content that involves commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, or pyramid schemes</p><br>
<p>
    <h6>
Prohibited Activity</h6>
You expressly agree that you are prohibited from engaging in, and will not engage in, the following prohibited activities in connection with your use of the OnlineWeddingMart Services
copying, modifying, translating, publishing, broadcasting, transmitting, licensing, sublicensing, assigning, distributing, performing, publicly displaying, or selling any Third Party Content or OnlineWeddingMart Content appearing on or through the OnlineWeddingMart Services
criminal or tortious activity, including child pornography, fraud, trafficking in obscene material, drug dealing, gambling, harassment, stalking, spamming, spimming, sending of viruses or other harmful files, copyright infringement, patent infringement, or theft of trade secrets
covering or obscuring the banner advertisements on your personal profile page, or any OnlineWeddingMart page via HTML/CSS or any other means
any automated use of the system, such as using scripts to add friends or send comments or messages
interfering with, disrupting, or creating an undue burden on the OnlineWeddingMart Services or the networks or services connected to the OnlineWeddingMart Services
attempting to impersonate another User, person, or representative of OnlineWeddingMart
using the account, username, or password of another User at any time or disclosing your password to any third party or permitting any third party to access your account
selling or otherwise transferring your profile, without our permission
using any information obtained from the OnlineWeddingMart Services in order to harass, abuse, or harm another person
displaying an advertisement on your profile, or accepting payment or anything of value from a third person in exchange for your performing any commercial activity on or through the OnlineWeddingMart Services on behalf of that person, such as placing commercial content on your profile, posting blogs or bulletins with a commercial purpose, or sending private messages with a commercial purpose
using the OnlineWeddingMart Services in a manner inconsistent with any and all applicable laws and regulations</p><br>
<p>
    <h6>
Copyright Policy</h6>
You may not post, modify, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information belonging to OnlineWeddingMart or others (including without limitation Third Party Content or OnlineWeddingMart Content) without obtaining the prior written consent of the owner of such copyrighted material, trademarks, or other proprietary information. If we become aware that one of our users is a repeat copyright infringer, it is our policy to take reasonable steps within our power to terminate that user. Without limiting the foregoing, if you believe that your work has been copied and posted on the OnlineWeddingMart Services in a way that constitutes copyright infringement, please provide us with relevant proof and we ll be happy to take corrective action accordingly</p><br>
<p>
    <h6>
User Disputes</h6>
You are solely responsible for your interactions with other OnlineWeddingMart Users. OnlineWeddingMart reserves the right, but has no obligation, to monitor disputes between you and other Users and to immediately terminate the privileges of any User for any reason or for no reason</p><br>
<p>
    <h6>
Privacy</h6>
Use of the OnlineWeddingMart Services is also governed by our Privacy Policy, located at www.OnlineWeddingMart.com/privacy and incorporated into this Agreement by this reference</p><br>
<p>
    <h6>
Promotions and Giveaways</h6>
From time to time, OnlineWeddingMart will offer sweepstakes, promotions or giveaways on behalf of third parties. Each promotion or giveaway will have its own rules that will disclose what information is gathered, how that information is used, and who that information shared with. OnlineWeddingMart encourages you to review such information prior to engaging with each sweepstakes, promotion or giveaway</p><br>
<p>
    <h6>
Disclaimer of Warranties</h6>
THE OnlineWeddingMart SERVICE IS PROVIDED TO YOU ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT REPRESENTATIONS OR WARRANTIES OF ANY KIND AND OnlineWeddingMart EXPRESSLY DISCLAIMS ANY AND ALL IMPLIED OR STATUTORY WARRANTIES TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, INCLUDING WITHOUT LIMITATION IMPLIED WARRANTIES OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM THE WEBSITE OR OnlineWeddingMart SERVICES SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THE TERMS OF USE. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE` 
Without limiting the generality of the foregoing, OnlineWeddingMart is not responsible for any incorrect or inaccurate Content posted on the OnlineWeddingMart Website or in connection with the OnlineWeddingMart Services. User Content created and posted on the OnlineWeddingMart Website may contain links to other websites. OnlineWeddingMart is not responsible for the accuracy or opinions contained in User Content or on third party websites linked from User Content. Such websites are in no way investigated, monitored or checked for accuracy or completeness by OnlineWeddingMart. Inclusion of any linked website on the OnlineWeddingMart Services does not imply approval or endorsement of the linked website by OnlineWeddingMart. When you access these third-party sites, you do so at your own risk. OnlineWeddingMart takes no responsibility for third party advertisements which are posted on this OnlineWeddingMart Website or through the OnlineWeddingMart Services, nor does it take any responsibility for the goods or services provided by its advertisers. OnlineWeddingMart is not responsible for the conduct, whether online or offline, of any User of the OnlineWeddingMart Services. OnlineWeddingMart assumes no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of, any User communication or any Content. OnlineWeddingMart is not responsible for any problems or technical malfunction of any telephone network or lines, computer online systems, servers or providers, computer equipment, software, failure of any email or players due to technical problems or traffic congestion on the Internet or on any of the OnlineWeddingMart Services or combination thereof, including any injury or damage to Users or to any person’s computer related to or resulting from participation or downloading materials in connection with the OnlineWeddingMart Services. Under no circumstances shall OnlineWeddingMart be responsible for any loss or damage, including personal injury or death, resulting from use of the OnlineWeddingMart Services, attendance at a OnlineWeddingMart event, from any Content posted on or through the OnlineWeddingMart Services, or from the conduct of any Users of the OnlineWeddingMart Services, whether online or offline. OnlineWeddingMart cannot guarantee and does not promise any specific results from use of the OnlineWeddingMart Services</p><br>
<p>
    <h6>
Limitation of Liability</h6>
IN NO EVENT SHALL OnlineWeddingMart OR ANY PARENT, SUBSIDIARY, AFFILIATE, DIRECTOR, OFFICER, EMPLOYEE, LICENSOR, DISTRIBUTOR, SUPPLIER, AGENT, RESELLER, OWNER, OR OPERATOR OF OnlineWeddingMart BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT DAMAGES ARISING FROM YOUR USE OF THE SERVICES, EVEN IF OnlineWeddingMart HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, ONLINEWEDDINGMART’S LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER AND REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO THE AMOUNT PAID, IF ANY, PAID BY YOU TO OnlineWeddingMart FOR THE OnlineWeddingMart SERVICES DURING THE TERM OF YOUR USE. THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW IN THE APPLICABLE JURISDICTION. YOU SPECIFICALLY ACKNOWLEDGE THAT OnlineWeddingMart SHALL NOT BE LIABLE FOR USER CONTENT OR FOR ANY DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY AND THAT THE RISK OF HARM OR DAMAGE FROM THE FOREGOING RESTS ENTIRELY WITH YOU.
SOME JURISDICTIONS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES. ACCORDINGLY, SOME OF THE LIMITATIONS MAY NOT APPLY TO YOU</p><br>
<p>
    <h6>
Special Admonitions for International Use</h6>
Recognizing the global nature of the Internet, you agree to comply with all local rules regarding online conduct and acceptable Content. Specifically, you agree to comply with all applicable laws regarding the transmission of technical data exported from the United States or the country in which you reside
Disputes; Choice of Law; Venue
If there is any dispute about or involving the OnlineWeddingMart Services, you agree that the dispute shall be governed by the laws prevailing where the dispute happens. The prevailing party in any action brought in connection with this Agreement shall be entitled to an award of attorneys’ fees and costs incurred by the prevailing party in connection with such action</p><br>
<p>
    <h6>
Indemnity</h6>
You agree to indemnify and hold harmless OnlineWeddingMart, and any parent, subsidiary, and affiliate, director, officer, employee, licensor, distributor, supplier, agent, reseller, owner and operator, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, including but not limited to reasonable attorneys’ fees, made by any third party due to or arising out of your use of the OnlineWeddingMart Services in violation of this Agreement and/or arising from: (i) your use of and access to the OnlineWeddingMart Website; (ii) your violation of any term of these Terms of Use; (iii) your violation of any third party right, including without limitation any copyright, property, or privacy right; or (iv) any claim that your User Content caused damage to a third party. This defense and indemnification obligation will survive these Terms of Use and your use of the OnlineWeddingMart Website and/or the OnlineWeddingMart Services</p><br>
<p>
    <h6>
Waiver and Severability of Terms</h6>
The failure of OnlineWeddingMart to exercise or enforce any right or provision of this Agreement shall not constitute a waiver of such right or provision. If any provision of this Agreement is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties’ intentions as reflected in the provision, and the other provisions of this Agreement remain in full force and effect</p><br>
<p>
    <h6>
Statute of Limitations</h6>
You agree that regardless of any statute or law to the contrary, any claim or cause of action arising out of or related to use of the Service or this Agreement must be filed within one (1) year after such claim or cause of action arose or be forever barred</p><br>
<p>
    <h6>
Violations</h6>
Please report any violations of these Terms of Use to us by emailing us at info@OnlineWeddingMart.com
</p><br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    </div>


@endsection