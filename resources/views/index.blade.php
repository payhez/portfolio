@extends('layouts.layout')
@section('content')
<div id="hero" class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Rubar Kurt</h1>
                <div class="page-scroll">
                    <p class="job-title">Software/Web Developer</p>
                    <a href="#contact" class="btn btn-fill ">Contact</a>
                    <div class="clearfix visible-xxs"></div>
                    <a href="https://github.com/payhez" class="btn btn-border">GitHub</a>
                </div>
            </div>
        
            <div class="col-md-6 text-right">
            </div>

        </div>
    </div>
</div><!-- /.hero -->

<main id="main" class="site-main">

    <section id="about" class="site-section section-about text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>About</h2>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                    <p>Hello There! I'm Rubar, a Web Developer, a PHP enthusiast, and a guy slighty obsessed for open source :). I’m currently available for freelance work. If you have a project that you want to get started or think you need my help with something, then get in touch.</p>
                    <a href="https://drive.google.com/file/d/1RbxUOp7TGXChyf_dAj_WJ_VRGwV08UTK/view" class="btn btn-fill" target="_blank" download>Download my cv</a>
                </div>
            </div>
        </div>
    </section><!-- /.secton-about -->

    <section class="site-section section-skills">
        <div class="container">
            <div class="text-center">
                <h3>My Skills</h3>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
            </div>
            <div class="row">
                @foreach($skills as $skill)
                    @if($loop->index % 2 == 0)
                        <div class="col-md-4">
                            <div class="skill">
                                <h4>{{$skill['skill']}}</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal=" {{$skill['value']}}"></div><!-- /.progress-bar -->
                                </div><!-- /.progress -->
                            </div><!-- /.skill -->
                        
                    @else
                        <div class="skill">
                            <h4>{{$skill['skill']}}</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="{{$skill['value']}}"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        </div>
                    @endif
               @endforeach
            </div>
        </div>
    </section><!-- /.secton-skills -->

    <section id="service" class="site-section section-services overlay text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>What i do</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="col-sm-4">
                    <div class="service">
                        <img src="assets/img/front-end.svg" alt="Front End Developer">
                        <h4>Front-end</h4>
                        <p>As a Web Developer, I have experience in HTML5 and CSS3 techniques working with jQuery or more advanced javascript MVC frameworks such as React</p>
                    </div><!-- /.service -->
                </div>
                <div class="col-sm-4">
                    <div class="service">
                        <img src="assets/img/back-end.svg" alt="Back End Developer">
                        <h4>Back-end</h4>
                        <p>Utilising php frameworks such as Laravel or creating bespoke code, I've written services supporting thousands of users, including REST APIs, e-learning applications and more.</p>
                    </div><!-- /.service -->
                </div>
                <div class="col-sm-4">
                    <div class="service">
                        <img src="assets/img/consultancy.svg" alt="Coding">
                        <h4>Consultancy</h4>
                        <p>As well as providing development services, I can also help you decide strategic roadmaps via consultancy services.</p>
                    </div><!-- /.service -->
                </div>
            </div>
        </div>
    </section><!-- /.secton-services -->

    <section id="portfolio" class="site-section section-portfolio">
        <div class="container">
            <div class="text-center">
                <h3>My recent Works</h3>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
            </div>
            <div class="row">

                @foreach($projects as $project)
                <div class="col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{$project['picpath']}}" class="img-res" alt="">
                        <div class="portfolio-item-info">
                            <h4>{{$project['name']}}</h4>
                            <a href="#" data-toggle="modal" data-target="#{{$project['id']}}"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <a href="{{$project['link']}}"><span class="glyphicon glyphicon-link"></span></a>
                        </div><!-- /.portfolio-item-info -->
                    </div><!-- /.portfolio-item -->
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- /.secton-portfolio -->

    <section id="contact" class="site-section section-form text-center">
        <div class="container">

            <h3>Contact</h3>
            <img src="assets/img/lines.svg" class="img-lines" alt="lines">
            <form action="/" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control mt-x-0" placeholder="Name" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>   
                    </div>
                    <div class="col-sm-12">
                        <textarea name="message" id="mesaage" class="form-control" placeholder="Message" required></textarea>
                    </div>
                </div>
                @csrf
                <button  class="btn btn-border" type="submit"> send <span class="glyphicon glyphicon-send"></span></button>
            </form>
        </div>
    </section><!-- /.section-form -->

</main><!-- /#main -->

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <a class="icon facebook-bg" href="https://www.facebook.com/PaizNoFinger"><i class="icon-facebook"></i></a>
                <a class="icon linkedin-bg" href="https://www.linkedin.com/in/rubar-kurt-b0387655/"><i class="icon-linkedin"></i></a>
            </div>
            <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright">@2020 by Payhez</p></div>
            <div class="col-sm-4 col-xs-3">
                <div class="text-right page-scroll">
                    <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /#footer -->

<!-- Modals -->
@foreach($projects as $project)
<div id="{{$project['id']}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
        <img class="img-res" src="{{$project['picpath']}}" alt="">
        </div>
        <div class="modal-body">
        <h4 class="modal-title">{{$project['name']}}</h4>
        <p>{{$project['description']}}</p>
        </div>
        <div class="modal-footer">
        <a href="{{$project['link']}}" class="btn btn-fill">GitHub</a>
        </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endforeach
@endsection