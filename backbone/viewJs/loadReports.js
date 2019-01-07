$(document).ready(function(){

		//get the table data 
	get_table_data();
	// pdf_upload();
	// image_loaded();
	displayName();
	// existValue();
	// LoadDepartment();
	// LoadLevels();
	// LoadCategories();
	
	// Display_Total_Money();
	// Display_Total_Users();
	// Display_Total_LoanRequest();
	// LoadBanks();
	// LoadStates();

	// function LoadDepartment(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../backbone/controller/getDepartment.php',
	// 		data: "get_department",
	// 		success:function(html){
	// 			$("#department").html(html);
	// 		}
	// 	});
	// }


	// $("body").on("click","#addlog", function(){
	// 	existValue();
	// });// ends view user

	function displayName() {
			var name = $("#getId").val();

			$.ajax({
				type: 'GET',
				url: '../../backbone/controller/displayName.php',
				data: {name : name },
				success:function(html){
				$("#display").html(html);
			}
		});
	}


	function image_loaded() {
			$(document).on("change","#img_file", function(){
				var property = document.getElementById("img_file").files[0];
				var image_name = property.name;
				var	image_extension = image_name.split(".").pop().toLowerCase();
				var image_size = property.size;
				if ($.inArray(image_extension,["png","jpg","jpeg"]) === -1) {
					$("#msg").html("<div class='alert alert-danger' role='alert'>Invalid Format Selected</div>");
					// alert("invalid Image Format");
				}
				
				if (image_size > 200000) {
					$("#msg").html("<div class='alert alert-warning' role='alert'>Image File is too large</div>");
					// alert("invalid Image size");
				}
				else
				{
					$("#img_show").val(image_name);
					var form_data = new FormData();
					form_data.append("img_file", property);
					$.ajax({
						url:"../backbone/controller/loadImage.php",
						method:"POST",
						data:form_data,
						contentType:false,
						cache:false,
						processData:false,
						beforeSend:function(){
							$("#uploaded_image").html("<label class='atext-success' >Uploading Image ...</label>");
						},
						success:function(data){
							$("#uploaded_image").html(data);

						}
					});
				}
			});
		}


		function get_table_data(){
			$.ajax({
				url: '../../backbone/controller/getReports.php',
				data: 'getReports',
				dataType: 'json',
				beforeSend: function(){

				}
			}).done(function(data){
				if (data.data != 'zero') {

					if(data.count != 0){
					//call manage data function
					manage_data(data.data);
					}else{
						$("#nofill").html('NO RECORDED LEAVE FOUND');
					}

				}else{
					$("#nofill").html('<h3 class="text-center"> YOU HAVE NO ACTIVITIES FILLED IN YET</h3>');
				}

			});
		}

		//manage the data
		function manage_data(data){
				var row = '';
				$.each(data, function(key, value){
					row += '<tr>';
					row += ' <td scope="row" hidden>'+ value.id +'</td>'; 
					row += '<td class="text-center upper">'+ value.date +'</td>';  
					row += '<td class="text-center upper">'+ value.matricNo +'</td>';
					row += '<td class="text-center upper" >'+ value.referralCode +'</td>';
					row += '<td class="text-center upper" hidden>'+ value.issue +'</td>';
					row += '<td class="text-center upper" hidden>'+ value.supervisorName +'</td>';
					row += '<td class="text-center upper" data-id="'+ value.id +'">';
					row += '<button class=" btn btn-primary btn-sm view-value" data-toggle="modal" data-target="#view-values"> <i class="fa fa-eye"></i> </button>';
					row += '</td>';
					row += '</tr>'; 
				});

			$("#contents").html(row);
		}	


		$("body").on("click",".view-value", function(){
			var id = $(this).parent("td").data('id');
			var date = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
			var matricNo = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
			var referralCode = $(this).parent("td").prev("td").prev("td").prev("td").text();
			var issue = $(this).parent("td").prev("td").prev("td").text();
			var supervisorName = $(this).parent("td").prev("td").text();
			$.ajax({
				type: 'GET',
				url: '../../backbone/controller/viewedReport.php',
				data: {id:id}
			});
			// var full_name = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
			// var email = $(this).parent("td").prev("td").prev("td").prev("td").text();
			// var nexcop_account_no = $(this).parent("td").prev("td").text();
			// var quantity = $(this).parent("td").prev("td").prev("td").prev("td").text();
			$("#view-values").find("div[id='date']").html(date);
			$("#view-values").find("div[id='matricNo']").html(matricNo);
			$("#view-values").find("div[id='issue']").html(issue);
			$("#view-values").find("div[id='referralCode']").html(referralCode);
			$("#view-values").find("div[id='supervisorName']").html(supervisorName);
			// $("#view-values").find("div[id='status']").html(status);
			// $("#trans-form").find("input[name='full_name']").val(full_name);
			// $("#trans-form").find("input[name='email']").val(email);
			// $("#trans-form").find("input[name='nexcop_account_no']").val(nexcop_account_no);
			// $("#edit-material").find("input[name='quantity']").val(quantity);
			// $("#edit-material").find(".edit-id").val(id);
			
		});



});