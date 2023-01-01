@extends('Frontend.Layouts._layout')
@section('title', $metas->find(4)->title)
@section('meta_description', $metas->find(4)->description)
@section('meta_keywords', $metas->find(4)->keywords)
@section('styles')
    <style>
        h1{
            font-size: 55px !important;
            font-weight: bold !important;
        }
    </style>

@endsection

@section('content')
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{$photos->find(14)->getPath()}})">
            <img src="{{$photos->find(14)->getPath()}}" alt="">
        </section>
        <!-- breadcrumb-area-end -->


        <!-- apartments-area -->
        <section class="apartments pt-90 pb-90" id="kam-v-okoli-mapa">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center pl-40 pr-40 mb-20 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <span style="color:#b69981;font-size: 16px;font-weight: 500;text-transform: uppercase;">{{$texts->find(33)->field}}</span>
                            <h1 style="color:#352316;"> {{$texts->find(33)->field_2}} </h1>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12 ">
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">

                                    <div class="col-12">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link mt-3 active" id="nav-home-tab" data-toggle="tab" href="*" role="tab" aria-controls="nav-home" aria-selected="true">Všetko</a>
                                                <a class="nav-item nav-link mt-3" id="nav-home-tab" data-toggle="tab" href="restauracie_bary" role="tab" aria-controls="nav-home" aria-selected="false">Reštaurácie</a>
                                                <a class="nav-item nav-link mt-3" id="nav-profile-tab" data-toggle="tab" href="turistika" role="tab" aria-controls="nav-profile" aria-selected="false">Turistika</a>
                                                <a class="nav-item nav-link mt-3" id="nav-contact-tab" data-toggle="tab" href="zimne_aktivity" role="tab" aria-controls="nav-contact" aria-selected="false">Lyžovanie</a>
                                                <a class="nav-item nav-link mt-3" id="nav-about-tab" data-toggle="tab" href="kulturne_pamiatky" role="tab" aria-controls="nav-about" aria-selected="false"> Kultúra</a>
                                                <a class="nav-item nav-link mt-3" id="nav-contact-tab" data-toggle="tab" href="wellness" role="tab" aria-controls="nav-contact" aria-selected="false">Plávanie</a>
                                                <a class="nav-item nav-link mt-3 " id="nav-about-tab" data-toggle="tab" href="deti" role="tab" aria-controls="nav-about" aria-selected="false">Deti</a>
                                                <a class="nav-item nav-link mt-3 " id="nav-about-tab" data-toggle="tab" href="nakupy" role="tab" aria-controls="nav-about" aria-selected="false">Nákupy</a>
                                                <a class="nav-item nav-link mt-3 " id="nav-about-tab" data-toggle="tab" href="ine" role="tab" aria-controls="nav-about" aria-selected="false">Iné</a>
                                                <div class="col-5">

                                                </div>
                                            </div>
                                        </nav>
                                    </div>

                                    <div class="col-12 mt-10">
                                        <div class="apartments-img">

                                            <div id="map" style="height:510px;">

                                            </div>

                                            @foreach(\App\GPS::where('active', 1)->whereNotNull('lat')->whereNotNull('lng')->get() as $gps)
                                                <div id="popup-{{$gps->id}}" style="display: none;">
                                                    @if(!empty($gps->path))
                                                        <img src="{{$gps->getPath()}}">
                                                    @endif
                                                    <i>&times;</i>
                                                    <div>
                                                        <h4>{{$gps->name}}</h4>
                                                        <p>{!! $gps->description !!}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center"><br>
                                    <a href="https://www.travelguide.sk/svk/stara-lesna/turisticke-zaujimavosti/" class="btn" target="_blank">Pozrite si turistického sprievodcu</a>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- apartments-area-end -->

        <!-- cta-area -->
        <section class="cta-area cta-bg pt-120 pb-120" style="background-image: url({{$photos->find(15)->getPath()}})">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <p>{{$texts->find(34)->field}}</p>
                            <h2 id="obsadenost">{{$texts->find(34)->field_2}}</h2>

                            <div class="cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                                <a href="{{$ctas->find(10)->button_link}}" class="btn" style="margin-top: 10px;">{{$ctas->find(10)->button_text}}</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- cta-area-end -->

@endsection <!--CONTENT-->
@section('scripts')


    <script>
        var markers = [
                @foreach(\App\GPS::where('active', 1)->whereNotNull('lat')->whereNotNull('lng')->get() as $gps)
            { id:{{$gps->id}}, lat:{{$gps->lat}}, lng:{{$gps->lng}}, type: '{{$gps->group_id}}'},
            @endforeach
        ];

        var iMarkers = {
            nakupy: [],
            restauracie_bary: [],
            turistika: [],
            zimne_aktivity: [],
            kulturne_pamiatky: [],
            wellness: [],
            ine: [],
            deti: []
        };

        var map = null;

        function initMap() {
            var uluru = {lat: 48.861394, lng: 19.718656};
            var zoom = 8;
            if($(window).width() < 767)
                zoom = 10;
            if($(window).width() < 480)
                zoom = 11;
            map = new google.maps.Map(
                document.getElementById('map'), {zoom: 8, center: uluru});
            var Popup;
            var bounds = new google.maps.LatLngBounds();

            var iconBase = '{{url('/markers/')}}';

            var iconWidth = 25;
            var iconHeight = 38;
            var icons = {
                nakupy: {
                    icon: {
                        url: iconBase + '/restauracie-a-bary-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                },
                restauracie_bary: {
                    icon: {
                        url: iconBase + '/restauracie-a-bary-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                },
                turistika: {
                    icon: {
                        url: iconBase + '/turistika-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                },
                zimne_aktivity: {
                    icon: {
                        url: iconBase + '/zimne-aktivity-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                },
                kulturne_pamiatky: {
                    icon: {
                        url: iconBase + '/kulturne-pamiatky-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                },
                wellness: {
                    icon: {
                        url: iconBase + '/welness-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                },
                ine: {
                    icon: {
                        url: iconBase + '/ine-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                },
                deti: {
                    icon: {
                        url: iconBase + '/deti-min.png',
                        scaledSize: new google.maps.Size(iconWidth, iconHeight),
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                }
            };

            //'pin-chalet-min.png'

            $.each(markers, function (a, b) {
                var marker = new google.maps.Marker({
                    position: {lat: b.lat, lng: b.lng},
                    map: map,
                    icon: icons[b.type].icon
                });
                marker.addListener('click', function() {
                    $('<div class="popup-open"></div>').insertAfter('#map');
                    $('#popup-'+b.id).show();
                });
                iMarkers[b.type].push(marker);
                bounds.extend({lat: b.lat, lng: b.lng});
            });


            var marker = new google.maps.Marker({
                position: {lat: 49.17022, lng:20.29144},
                map: map,
                icon: {
                    url: iconBase + '/pin-chalet-min.png',
                    scaledSize: new google.maps.Size(35, 53),
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(0, 0) // anchor
                },
                zIndex: -100
            });
            bounds.extend({lat: 49.17022, lng:20.29144});

            map.fitBounds(bounds);
        }

        $('#kam-v-okoli-mapa .nav-tabs a').click(function () {
            //bounds = new google.maps.LatLngBounds();
            var found = false;
            if($(this).attr('href') == '*') {
                $.each(iMarkers, function (a, markerArr) {
                    $.each(markerArr, function (a, marker) {
                        marker.setVisible(true);
                        found = true;
                        //bounds.extend(marker.getPosition());
                    });
                });
            } else {
                $.each(iMarkers, function (a, markerArr) {
                    $.each(markerArr, function (a, marker) {
                        marker.setVisible(false)
                    });
                });
                $.each(iMarkers[$(this).attr('href')], function (a, marker) {
                    marker.setVisible(true);
                    found = true;
                    //bounds.extend(marker.getPosition());
                });
                
            }
            /*if(found)
                map.fitBounds(bounds);*/
            if($(window).width() < 767) {
                $('html, body').animate({
                    scrollTop: $("#map").offset().top - 200
                }, 400);
            }
        });

        $('body').on('click', '.popup-open', function () {
            $('.popup-open').detach();
            $('[id^="popup-"]').hide();
        });

        $('body').on('click', '[id^="popup-"] i', function () {
            $('.popup-open').detach();
            $(this).closest('[id^="popup-"]').hide();
        });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUH5xT05f_04nQQPhPdiZNCJbXw0htUmA&callback=initMap"></script>
@endsection
