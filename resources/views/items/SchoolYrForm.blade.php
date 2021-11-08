<div class="card mb-5 mt-5" id="cardss">
    <div class="card-header" style="height:70px;">
        <h1 class="form-title">School Year Form</h1>
    </div>
    <div class="card-body" id="teacher-card">
        <div class="mb-1 mt-1">
            <div class="col">
                <div class="row">
                    <div class="col form-group @error('schoolYr_Started') has-error @enderror">
                        {!! Form::text('schoolYr_Started', null, ['class'=>'form-control','placeholder' => 'School Year Started' , 'required' => '']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('schoolYr_Started') }}</span>    
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group @error('schoolYr_Ended') has-error @enderror">
                        {!! Form::text('schoolYr_Ended', null, ['class'=>'form-control','placeholder' => 'School Year Ended', 'required' => '']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('schoolYr_Ended') }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control">Submit</button> 
                </div>
            </div>
        </div>

        
        
    </div>
    
</div>


