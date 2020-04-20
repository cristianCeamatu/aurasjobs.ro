            <div class="col-md-3 padded-div">
                <div class="row">


                    <div class="candidate-sidenav" id="sidenav">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="text-center text-muted delimeter"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My candidates cart <b class="text-primary">0</b>
                            </li>
                            <li class="cartItem"><a href="/candidates#wrapper">Chef / Demi Chef de Partie</a><small class="text-muted">Ceamatu Cristian viorel</small>
                                <a href="#" class="close"><i class="fa fa-close" aria-hidden="true"></i></a>
                                <div class="actionButtons">
                                    <span class="button sidenav-showMail"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <span class="button sidenav-showInterview"><i class="fa fa-skype" aria-hidden="true"></i></span>
                                    <!-- Functionality not ready
                                    <span class="button sidenav-showVideo"><i class="fa fa-video-camera" aria-hidden="true"></i></span>-->
                                    <form class="form-horizontal actionForm">
                                    </form>
                                    <div class="message"></div>
                                </div>

                            </li>


                            <li class="text-center text-muted delimeter"><i class="fa fa-building-o" aria-hidden="true"></i> Select by department</li>
                                <?php $department = request('department'); ?>

                                @foreach ($departments as $stats)
                                    <li {!! $department == $stats['department'] ? 'class="selected"': '' !!}><a href="/candidates/?department={{ $stats['department'] }}#wrapper">{!! $stats['department'] . ' <small>(' . $stats['candidates']  . ')</small>' !!}</a></li>
                                @endforeach


                            @if(auth()->id() == 1)


                            <li class="text-center text-muted delimeter"><i class="fa fa-bar-chart" aria-hidden="true"></i> Select by interview/employer</li>
                                <?php $selectedEmployer = request('employer'); ?>
                                
                                @foreach ($candidateEmployers as $candidateEmployer)
                                    <li {!! $selectedEmployer == $candidateEmployer['employer'] ? 'class="selected"': '' !!}><a href="/candidates/?employer={{ $candidateEmployer['employer'] }}#wrapper">{!! ucfirst($candidateEmployer['employer']) . ' <small>(' . $candidateEmployer['candidates']  . ')</small>' !!}</a></li>
                                @endforeach

                            <li class="text-center text-muted delimeter"><i class="fa fa-check" aria-hidden="true"></i> Select by status</li>
                                <?php $currentStatus = request('status'); ?>
                                @foreach ($candidatesStatus as $candidateStatus)
                                    <li {!! $currentStatus == $candidateStatus['status'] ? 'class="selected"': '' !!}><a href="/candidates/status/{{ $candidateStatus['status'] }}#wrapper">{!! ucfirst($candidateStatus['status']) . ' <small>(' . $candidateStatus['candidates']  . ')</small>' !!}</a></li>
                                @endforeach
                            @endif               
                        </ul>
                    </div><!-- /#sidenav -->


                </div>
            </div><!-- /col-md-3 -->