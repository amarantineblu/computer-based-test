{{-- <div class="modal" id="editQuestion" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Edit Question </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{Route('edit.question')}}" method="POST">
        @csrf
        <div class="modal-body">
            @include('includes.question_form')
        <input type="hidden" class=" form-control question_id" name="question_id" >
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div> --}}

{{-- <div class="modal" id="deleteQuestion" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> Delete Question </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{Route('delete.question')}}" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" class=" form-control content_id" name="question_id" >
                <input type="text" class="content form-control" name="question">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger" > Delete </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
        </form>
      </div>
    </div>
  </div> --}}
