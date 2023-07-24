<script>
	function editQuestion(obj,opt) {
      $('#editQuestion').modal('show');
      $('#editQuestion .question').val(obj.question);
      $('#editQuestion .question_id').val(obj.id);
      $('#editQuestion .options').val(opt.option)
	}
    function deleteQuestion(del){
      $('#deleteQuestion').modal('show');
      $('#deleteQuestion .content').val(del.question);
      $('#deleteQuestion .content_id').val(del.id)
    }
</script>
