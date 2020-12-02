
  $('.summernote').summernote({
    height: 100
  });
$('select').selectpicker();



//ajax submit new entity form data
$("#newEntityForm").submit(function(event){
    event.preventDefault(); //prevent default action    
    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = new FormData(this); //Creates new FormData object
    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
		contentType: false,
		cache: false,
        processData:false,

        success : function(){
         $('#newEntityModal').modal('hide'); 
         $('#newContributionEtityModal').modal('hide'); 
            
        }
    }).done(function(){ //
        $('#newEntityForm').trigger("reset"); 
        if($('#thumbnail'))$('#thumbnail').hide();
        $('#dataTable').DataTable().ajax.reload();
    });

}); 

//ajax submit edit entity form data
$("#editEntityForm").submit(function(event){
    event.preventDefault(); //prevent default action    
    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = new FormData(this); //Creates new FormData object
    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
		contentType: false,
		cache: false,
        processData:false,

        success : function(){
         $('#editEntityModal').modal('hide');    
        }
    }).done(function(){ //
        $('#editEntityForm').trigger("reset"); 
        if($('#thumbnail'))$('#thumbnail').hide();
        $('#dataTable').DataTable().ajax.reload();
    });

}); 

//ajax submit edit entity form data
$("#deleteEntityForm").submit(function(event){
    event.preventDefault(); //prevent default action    
    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = new FormData(this); //Creates new FormData object
    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
		contentType: false,
		cache: false,
        processData:false,

        success : function(){
         $('#deleteEntityModal').modal('hide');    
        }
    }).done(function(){ //
        $('#deleteEntityForm').trigger("reset"); 
        $('#dataTable').DataTable().ajax.reload();
      
    });

}); 







