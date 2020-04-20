<div class="col-md-9 padded-div">

    @forelse ($candidates as $candidate)


    <div class="candidate">                        
        <a href="/candidates/{{ $candidate->id }}">
            <h2 class="candidate-title">
                {{ $candidate->position }}
                <span class="text-muted">{{ $candidate->name }}</span>
            </h2>
            <h3 class="candidate-subtitle">
                Experience ~ <b class="text-primary">{{ $candidate->positionExperience ? $candidate->positionExperience : "check the CV"  }}</b><br>
                Cruise jobs experience ~ <b class="text-primary">{{ $candidate->cruiseExperience }}</b><br>
                {{ $candidate->languages }}
            </h3>
        </a>
        <span class="text-muted date-added">Added on {{ $candidate->created_at->format('F j, Y') }}</span>
        <div class="actionButtons">                                  
            <button class="alert alert-primary showInterview"><i class="fa fa-skype" aria-hidden="true"></i> Interview</button>
            <button class="alert alert-primary showMailTo"><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail to</button>
            <!-- Functionality not ready 
            <button class="alert alert-primary "><i class="fa fa-video-camera" aria-hidden="true"></i> Video</button>-->
            <button class="alert alert-primary "><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
            <button class="alert alert-danger"><i class="fa fa-toggle-on" aria-hidden="true"></i> Hide</button>
            <form class="form-horizontal actionForm" data-candidateId="{{ $candidate->id }}">
<!--                 <div class="control-group">
                       <div class="form-group controls">
                            <label>Please select the date/hour:</label>
                            <input type="datetime-local" name="birthdate" class="form-control" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls">
                            <label>Please add your Skype/Facebook address</label>
                            <input type="text" name="birthdate" class="form-control" placeholder="skype:aurasjobs.ro" maxlength="50" value="">
                        </div>
                    </div>
                    <div class="control-group submit">
                        <div class="form-group controls">
                            <input type="submit" name="submit" class="form-control" value="Request interview">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls">
                            <label>Please enter you email address</label>
                            <input type="text" name="emailTo" class="form-control" placeholder="office@aurasjobs.ro" maxlength="50" value="">
                        </div>
                    </div>
                    <div class="control-group submit">
                        <div class="form-group controls">
                            <input type="submit" name="submit" class="form-control" value="Send candidate">
                        </div>
                    </div>-->
            </form>                                       
        </div>


        @if(auth()->id() == 1)
        <div class="actionButtons">                                  
            <button class="alert alert-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>

            <button class="alert alert-primary"><i class="fa fa-envelope" aria-hidden="true"></i> Send to
                <select>
                    <option value="anqor" selected>Anqor</option>
                    <option value="easy consult">Easy Consult</option>
                </select>
            </button>

            <button class="alert alert-primary"><i class="fa fa-user-o aria-hidden="true"></i> Status
                <select>
                    <option value="active" selected>active</option>
                    <option value="rejected">rejected</option>
                </select>
            </button>
            
            <button class="alert alert-primary showDelete"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>


            <form class="form-horizontal actionForm">
<!--                        <div class="control-group">
                    <div class="form-group controls">
                        <label>Are you sure you want to delete?</label>
                        <input type="hidden" name="delete" value="true">
                        <input type="submit" name="submit" class="form-control" value="Delete">
                    </div>
                </div>-->                           
            </form>


        </div><!-- /actionButtons -->
        @endif
    </div><!-- /candidate -->


    @empty


    <div class="alert alert-success text-center">
    <p>We are sorry. Currently no active candidates in your search</p>
    <p><a class="page-scroll text-primary" href="#subscribe">Subscribe</a> to get a notice every time we add a new candidate</p>
    <p><a href="/candidates/" class="text-primary"><i class="fa fa-arrow-left"></i>&nbsp;Back to all Candidates</a></p>
    </div>


    @endforelse
</div><!-- /col-md-8 -->