<header class="navbar custom-navbar navbar-fixed-top new-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3  col-xs-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ url('') }}"><img class="img-responsive" src="{{asset('image/imperium-logo-orange-new.png')}}"     alt="site logo"></a>
                    </div>
                </div>

                <div class="col-md-9  col-xs-12">
                    <div class="navbar-collapse collapse">
                        <nav class="main-menu">
                            <ul class="nav navbar-nav navbar-right" style="margin-left:-75px;">
                                <!--== manin menu ==-->
                                <!-- <li id="homeli"><a href="{{ url('') }}">Home</a></li> -->
                                <li id="aboutli"><a href="{{ url('about') }}">About Us</a>
                                    <!-- <ul>
                                        <li>
                                            <a href="javascript:void(0)"> 
                                                Our Vision
                                            </a>
                                        </li>
                                        <li><a href="{{ url('team') }}">Our Team working</a></li>
                                    </ul> -->
                                </li>

                                <li id="productsctisolutions" ><a href="{{url('products')}}">Products</a>
                                    <!-- <ul>
                                        <li><a href="{{ url('products/ctisolution') }}">CTI Solutions</a>
                                            <ul>
                                                <li><a href="{{ url('products-cti-crm-connecter') }}">CRM Connect ( IMCC )</a></li>
                                                <li><a href="{{ url('products-cti-outlook-connecter') }}">Outlook CTI Connector ( IMOC )</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('products-ivrsolutions') }}">IVR Solutions</a></li>
                                        <li><a href="{{ url('products-sms-solutions') }}">SMS Solutions</a></li>
                                        <li><a href="{{ url('products-fax-server') }}">Fax Server</a></li>
                                        <li><a href="{{ url('products-call-reporter') }}">Call Reporter</a></li>
                                    </ul> -->
                                </li>
                                <li id="solutionsli" ><a href="{{url('industry-influence')}}">Verticals</a>
                                    <!-- <ul>
                                        <li><a href="{{ url('solutions-business-center') }}">Business Center</a></li>
                                        <li><a href="{{ url('solutions-healthcare') }}">Health Care</a></li>
                                        <li><a href="{{ url('solutions-logistics') }}">Logistics</a></li>
                                        <li><a href="{{ url('solutions-service-industry') }}">Service Industry</a></li>
                                        <li><a href="{{ url('solutions-debt-collection') }}">Debt Collection</a></li>
                                    </ul> -->
                                </li>
                                <li id="solutionsli1" ><a href="{{ url('solutions') }}">Solutions</a>
                                </li>
                                <li >
                                    <a href="{{url('casestudy')}}">Case Studies</a>
                                </li>
                                <li id="partnersli" class="drop"><a href="javascript:;">Partners</a>
                                    <ul>
                                        <li><a href="{{ url('strategic-partnerships') }}">Strategic Partnership</a></li>
                                        <li><a href="javascript:void(0)">Technology Partner</a>
                                            <ul>
                                                 <li><a href="{{ url('cx') }}">Avaya</a></li>
                                               <!--   <li><a href="{{ url('partners-avaya') }}">Avaya</a></li>-->
                                                <li><a href="{{ url('partners-cisco') }}">Cisco</a></li>
                                                <li><a href="{{ url('partners-microsoft-lync') }}">Microsoft Lync</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('registration') }}">Channel Partner</a></li>
                                    </ul>
                                </li>
                                <li id="inaipili" class="drop"><a href="javascript:;">Cloud</a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('inaipi') }}"> 
                                                INAIPI Cloud
                                            </a>
                                        </li>
                                        <li><a href="{{ url('avaya') }}">Avaya Cloud</a></li>
                                    </ul>
                                </li>
                                <li id="contactli"><a href="{{ url('blog-news') }}">Blog</a></li>
                                <li id="contactli"><a href="{{ url('contact') }}">contact</a></li>
                                <!-- <li id="contactli"><a href="">Login</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </header>