@csrf
<header id="header" class="full-header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <div id="logo">
                    </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>
                
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="/"><div>Home</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="Dates"><div>Dates</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link cursor-normal"><div>Participation<i class="icon-caret-down1"></i></div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="programe"><div>Program</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="Guidelines"><div>Guidelines</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="call"><div>Call for Papers</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="registration"><div>Registration</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="social"><div>Social Events</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link cursor-normal"><div>Presentation<i class="icon-caret-down1"></i></div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="keynotes"><div>Keynotes</div>
                                </a>
                              
                                <ul class="sub-menu-container">
                                      @foreach($keynote as $item)
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{$item->website}}"><div>{{$item->description}}</div></a>
                                        </li>
                                        @endforeach
                                </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="topic"><div>Topics</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="special"><div>Special Sessions</div></a>
                                    <ul class="sub-menu-container">
                                      @foreach($specialsession as $item)
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{$item->title}}"><div>{{$item->description}}</div></a>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="technical"><div>Technical Tutorials</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="student-contest.html"><div>Student Contest</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="exhibitors.html"><div>Exhibitors</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="commit"><div>Committees</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="sponsor"><div>Sponsors</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link cursor-normal"><div>Venue<i class="icon-caret-down1"></i></div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="heraklion"><div>Heraklion & Crete</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="conference"><div>Conference Venue</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="venu"><div>Hotels</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="videos-and-photos"><div>Videos & Photos</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="contact"><div>Contact</div></a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>