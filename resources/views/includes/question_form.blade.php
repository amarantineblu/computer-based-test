<div class="question">
    <div class="row">
        {{-- <div class="ml-auto badge m-2 p-2">{{$questions->total()}}/{{$exam['no_of_questions']}}</div> --}}
    </div>
    <label for="" style="">Question</label> <br>
<textarea id="" cols="40" class="form-control question" name="question" rows="10"></textarea> <br>

<div class="row">
    <div class="col-sm-12">
        <ol class="">
            <li>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input type="radio" name="answer" onclick="$('.question-answers').val(0);
                            $(this).next('.question-answers').val(1)"
                             class="" value="0">
                             <input type="hidden" value="0" class="question-answers form-control" name="answers[]">
                        </span>
                    </div>
                    <input type="text" class="form-control options" placeholder="option" name="options[]">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input type="radio" name="answer" onclick="$('.question-answers').val(0);
                           $(this).next('.question-answers').val(1)" class="question-answers" value="0">
                            <input type="hidden" value="0" class="question-answers" name="answers[]">
                        </span>
                    </div>
                    <input type="text" class="form-control options" placeholder="option" name="options[]">

                </div>
            </li>
            <li>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input type="radio" name="answer" onclick="$('.question-answers').val(0);
                            $(this).next('.question-answers').val(1)" class="" value="0">
                            <input type="hidden" value="0" class="question-answers" name="answers[]">
                        </span>
                    </div>
                    <input type="text" class="form-control options" placeholder="option" name="options[]">

                </div>
            </li>
        </ol>
        <div class="input-groups">

        </div>
    </div>
</div>

</div>
