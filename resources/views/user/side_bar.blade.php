<ul class="hdlist">
       @if(empty(Session::get('user_id')))
            <li class="l"><a href="{{ url('register') }}" class="menulists"><span><img src="{{ $user_assets }}/create_account_b.png" alt="" class="lmis"></span> Create Account</a></li>
            @endif
            <li class="{{ Request::is('about-us') ? 'active' : '' }} l"><a href="{{ url('about-us') }}" class="menulists"><span><img src="{{ $user_assets }}/about_us_b.png" alt="" class="lmis"></span> About Us</a></li>
            
            <li class="{{ Request::is('advance-search') ? 'active' : '' }} l"><a href="{{ url('advance-search') }}" class="menulists"><span><img src="{{ $user_assets }}/find_match_b.png" alt="" class="lmis"></span> Find Match</a></li>
            
          {{--  <li class="{{ Request::is('our-police') ? 'active' : '' }} l"><a href="{{ url('our-police') }}" class="menulists"><span><img src="{{ $user_assets }}/our_policy_b.png" alt="" class="lmis"></span> Our Policy</a></li> --}}
            
            <li class="{{ Request::is('policy-privacy') ? 'active' : '' }} l"><a href="{{ url('policy-privacy') }}" class="menulists"><span><img src="{{ $user_assets }}/privacy_b.png" alt="" class="lmis"></span> Privacy & Policy</a></li>
            
            <li class="{{ Request::is('blog') ? 'active' : '' }} l"><a href="http://kaboolhai.com/blog/" target="_blank" class="menulists"><span><img src="{{ $user_assets }}/blogs_b.png" alt="" class="lmis"></span> Blogs</a></li>
            
            <li class="{{ Request::is('faqs') ? 'active' : '' }} l"><a href="{{ url('faqs') }}" class="menulists"><span><img src="{{ $user_assets }}/faqs_b.png" alt="" class="lmis"></span> FAQ's</a></li>
            
            <li class="{{ Request::is('our-partnar') ? 'active' : '' }} l"><a href="{{ url('our-partnar') }}" class="menulists"><span><img src="{{ $user_assets }}/our_partners_b.png" alt="" class="lmis"></span> Our Partners</a></li>
            
            <li class="{{ Request::is('contact-us') ? 'active' : '' }} l"><a href="{{ url('contact-us') }}" class="menulists"><span><img src="{{ $user_assets }}/contact_us_b.png" alt="" class="lmis"></span> Contact</a></li>

            <li class="{{ Request::is('help-center') ? 'active' : '' }} l"><a href="{{ url('help-center') }}" class="menulists"><span><i class="fa fa-question" style="color:red; font-size: 45px;"></i></span> Help Center</a></li>
          
          </ul>