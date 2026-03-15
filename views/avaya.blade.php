@extends('layouts.app')

@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')


<div class="lite-breadcroumb-area innerbanner" id="cloudbanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Avaya Cloud</h1>
                <div class="breadcroumb">
                    <a href="{{ url('') }}">Home</a> &gt;

                    <span class="current">Avaya Cloud</span>
                </div>
            </div>
        </div>
    </div>
</div>



<section id="about" class="service-area section-big section-padding">
    <div class="container">
        <div class="topcontent">

            <div class="subsec">
                <h2> Avaya Powered By Cloud </h2>

            </div>
            <div class="row">
                <div class="col-md-7">
                    <!-- <img class="right-img" src="{{asset('image/avaya-powered.png')}}"  alt="Imperium"> -->
                    <p>
                        Avaya is a giant in IP office infrastructure and software solutions thriving since 2001. They are at the forefront of innovation in the ICT Industry globally. 
                        <br><br>
                        Imperium has been proud DevConnect Technology partner for Avaya in the region. We support them in creating telecommunication experiences with technological fineness for our esteemed customers. 
                        <br><br>
                        Imperium has been dedicated to Avaya for more than a decade. They offer a wide range of telecommunication products and services and lend their expertise to partners so we can build and deliver impeccable techno solutions to our clients consistently.
                        <br><br>
                        In 2018, Imperium took a leap ahead to become <b>Avaya Powered by Cloud Partner.</b>
                    </p>
                </div>
                <div class="col-md-5 text-right">
                    <div class="showvideo">
                        <a data-toggle="modal" data-target="#myModal" href="javascript:;" class="playbtn">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                        <img src="assets/image/cloud-video.png" alt="Imperium">
                    </div>
                </div>
                <!-- <div class="col-md-8">
                    <div class="videoWrapper">
                       <iframe src="https://www.youtube.com/embed/-0AxzuttnSo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0"></iframe>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body">
                        <div class="videoWrapper">
                            <iframe id="videoIframe" src="https://www.youtube.com/embed/-0AxzuttnSo?rel=0" allowfullscreen="" width="560" height="315" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection