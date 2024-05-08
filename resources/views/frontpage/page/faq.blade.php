@extends('frontpage.general.main')
@section('content')
    <section class="banner banner-one page-banner height-banner">
        <div class="circle-shape" data-parallax='{"y" : 230}'><img
                src="https://www.forstaff.id/assets/media/banner/circle-shape.png" alt="circle" title="circle" width="800"
                height="800"></div>
        <div class="container">
            <div class="page-title-wrapper">
                <h1 class="page-title">FAQ</h1>
                <ul class="bradcurmed color-white">
                    <li><a href="{{ route('frontpage.beranda') }}" rel="noopener noreferrer">Beranda</a></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div> <svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
            <path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt"
                stroke-linejoin="miter" opacity="0.051" fill="none"
                d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
        </svg>
        <ul class="animate-ball">
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
        </ul>
    </section>
    <section class="faqs">
        <div class="container">
            <div class="tabs-wrapper">
                <ul class="nav faq-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="design-tab" data-toggle="tab" href="#design"
                            role="tab" aria-controls="design" aria-selected="true">UI/UX
                            Design</a> </li>
                    <li class="nav-item"> <a class="nav-link" id="service-tab" data-toggle="tab" href="#servi\ce"
                            role="tab" aria-controls="service" aria-selected="false">Service</a> </li>
                    <li class="nav-item"> <a class="nav-link" id="general-tab" data-toggle="tab" href="#general"
                            role="tab" aria-controls="general" aria-selected="false">General</a> </li>
                    <li class="nav-item"> <a class="nav-link" id="branding-tab" data-toggle="tab" href="#branding"
                            role="tab" aria-controls="branding" aria-selected="false">Branding</a> </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div id="accordionsing" class="faq faq-two pixFade">
                            <div class="card">
                                <div class="card-header" id="heading10">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse00" aria-expanded="false" aria-controls="collapse00"> How
                                            to contact with Customer Service?
                                        </button> </h5>
                                </div>
                                <div id="collapse00" class="collapse" aria-labelledby="heading10"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card active">
                                <div class="card-header" id="heading20">
                                    <h5> <button class="btn btn-link" data-toggle="collapse" data-target="#collapse10"
                                            aria-expanded="true" aria-controls="collapse10"> How delete my account?
                                        </button> </h5>
                                </div>
                                <div id="collapse10" class="collapse show" aria-labelledby="heading20"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading30">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Where is the edit optioon on dashboard?
                                        </button> </h5>
                                </div>
                                <div id="collapse20" class="collapse" aria-labelledby="heading30"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading40">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                            Is there any custome pricing system?
                                        </button> </h5>
                                </div>
                                <div id="collapse30" class="collapse" aria-labelledby="heading40"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading42">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                            How can I track my orders? </button> </h5>
                                </div>
                                <div id="collapse32" class="collapse" aria-labelledby="heading42"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading43">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                            Where is the edit optioon on dashboard?
                                        </button> </h5>
                                </div>
                                <div id="collapse33" class="collapse" aria-labelledby="heading43"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading45">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                            Can I cancel or change my order? </button>
                                    </h5>
                                </div>
                                <div id="collapse35" class="collapse" aria-labelledby="heading45"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
                        <div id="accordionsing-2" class="faq faq-two pixFade">
                            <div class="card active">
                                <div class="card-header" id="heading101">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse001" aria-expanded="false" aria-controls="collapse001">
                                            How to contact with Customer Service?
                                        </button> </h5>
                                </div>
                                <div id="collapse001" class="collapse show" aria-labelledby="heading101"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading201">
                                    <h5> <button class="btn btn-link" data-toggle="collapse" data-target="#collapse101"
                                            aria-expanded="true" aria-controls="collapse101"> How delete my account?
                                        </button> </h5>
                                </div>
                                <div id="collapse101" class="collapse" aria-labelledby="heading201"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading301">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse201" aria-expanded="false" aria-controls="collapse201">
                                            Where is the edit optioon on dashboard?
                                        </button> </h5>
                                </div>
                                <div id="collapse201" class="collapse" aria-labelledby="heading301"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading411">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse311" aria-expanded="false" aria-controls="collapse311">
                                            Is there any custome pricing system?
                                        </button> </h5>
                                </div>
                                <div id="collapse311" class="collapse" aria-labelledby="heading411"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div id="accordionsing-3" class="faq faq-two pixFade">
                            <div class="card active">
                                <div class="card-header" id="heading102">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse002" aria-expanded="false" aria-controls="collapse002">
                                            How to contact with Customer Service?
                                        </button> </h5>
                                </div>
                                <div id="collapse002" class="collapse show" aria-labelledby="heading102"
                                    data-parent="#accordionsing-3">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading202">
                                    <h5> <button class="btn btn-link" data-toggle="collapse" data-target="#collapse102"
                                            aria-expanded="true" aria-controls="collapse102"> How delete my account?
                                        </button> </h5>
                                </div>
                                <div id="collapse102" class="collapse" aria-labelledby="heading202"
                                    data-parent="#accordionsing-3">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading302">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse202" aria-expanded="false" aria-controls="collapse202">
                                            Where is the edit optioon on dashboard?
                                        </button> </h5>
                                </div>
                                <div id="collapse202" class="collapse" aria-labelledby="heading302"
                                    data-parent="#accordionsing-3">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading402">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse302" aria-expanded="false" aria-controls="collapse302">
                                            Is there any custome pricing system?
                                        </button> </h5>
                                </div>
                                <div id="collapse302" class="collapse" aria-labelledby="heading402"
                                    data-parent="#accordionsing-3">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                        <div id="accordionsing-4" class="faq faq-two pixFade">
                            <div class="card active">
                                <div class="card-header" id="heading103">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse003" aria-expanded="false" aria-controls="collapse003">
                                            How to contact with Customer Service?
                                        </button> </h5>
                                </div>
                                <div id="collapse003" class="collapse show" aria-labelledby="heading103"
                                    data-parent="#accordionsing-4">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading203">
                                    <h5> <button class="btn btn-link" data-toggle="collapse" data-target="#collapse13"
                                            aria-expanded="true" aria-controls="collapse13"> How delete my account?
                                        </button> </h5>
                                </div>
                                <div id="collapse13" class="collapse" aria-labelledby="heading203"
                                    data-parent="#accordionsing-4">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading304">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse204" aria-expanded="false" aria-controls="collapse204">
                                            Where is the edit optioon on dashboard?
                                        </button> </h5>
                                </div>
                                <div id="collapse204" class="collapse" aria-labelledby="heading304"
                                    data-parent="#accordionsing-4">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading404">
                                    <h5> <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse304" aria-expanded="false" aria-controls="collapse304">
                                            Is there any custome pricing system?
                                        </button> </h5>
                                </div>
                                <div id="collapse304" class="collapse" aria-labelledby="heading404"
                                    data-parent="#accordionsing-4">
                                    <div class="card-body">
                                        <p> Easy peasy owt to do with me cras I don't want no agro what a load of
                                            rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
                                            said the full monty. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
