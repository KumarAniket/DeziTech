<!DOCTYPE html>
<html>
<head>
	<title>Teacher Database</title>
</head>
<body>
<form enctype="multipart/form-data">
	Name : <input type="text" name="facname"> </input><br />
	Designation : <input type="text" name="facpos"> </input><br />
    Profile Picture :<input class="random" type="file" value="Upload files" name="Upload" id="tup-upl" placeholder="Browse files"><br />
	About You: <br />
	<textarea name="about" id="name" rows="5" style="width:60%;"></textarea>
	<br /><br />
	Expreience : 
	<br /><br />
	Industry : <select name="indus">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>10+</option>
	</select>
		Research : <select name="rese">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>10+</option>
	</select>
			Teaching : <select name="teach">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</optionhr />
		<option>9</option>
		<option>10</option>
		<option>10+</option>
	</select><br /><br /><hr />
	No. of Subjects Taught : <br />
	<textarea name="num" type="number"></textarea><br/>
	Subjects Taught: <br/>
	<div class="subs-t">
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	</div>

	<br /><br />
	Reseach Interests:<hr /><br/>
	<div class="res-t">
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<br /><br />
	</div>

	Achievements: <br/>
	<div class="ach-t">
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<br /><br />
	</div>

	Publications : <br/>
<hr />
	Conferences :<br />
	<div class="conf-t">
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<br /><br />
	</div>
	Journals : <br/>
	<div class="journ-t">
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<br /><br />
	</div>
	Projects : <br/>
	<div class="proj-t">
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<textarea type="text"></textarea>
	<br /><br />
	</div>
	<input class="but" type="button"></input>
</form>
</body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">


		$('.but').click(function() {

			ctr=0;
				$('.subs-t textarea').each(function(){
						ctr++;
						tempVal=$(this).val();
						if(ctr==1)
						{
							finalSubs=tempVal;
						}
						else
						{
						finalSubs=finalSubs+","+tempVal;
						}
				});
				ctr=0;
				$('.res-t textarea').each(function(){
						ctr++;
						tempVal=$(this).val();
						if(ctr==1)
						{
							finalRes=tempVal;
						}
						else
						{
						finalRes=finalRes+","+tempVal;
						}
				});

				ctr=0;
				$('.conf-t textarea').each(function(){
						ctr++;
						tempVal=$(this).val();
						if(ctr==1)
						{
							finalConf=tempVal;
						}
						else
						{
						finalConf=finalConf+","+tempVal;
						}
				});


				ctr=0;
				$('.journ-t textarea').each(function(){
						ctr++;
						tempVal=$(this).val();
						if(ctr==1)
						{
							finalJourn=tempVal;
						}
						else
						{
						finalJourn=finalJourn+","+tempVal;
						}
				});

				ctr=0;
				$('.proj-t textarea').each(function(){
						ctr++;
						tempVal=$(this).val();
						if(ctr==1)
						{
							finalProj=tempVal;
						}
						else
						{
						finalProj=finalProj+","+tempVal;
						}

				});
				ctr=0;
				$('.ach-t textarea').each(function(){
						ctr++;
						tempVal=$(this).val();
						if(ctr==1)
						{
							finalAch=tempVal;
						}
						else
						{
						finalAch=finalAch+","+tempVal;
						}
				});
				console.log(finalProj+"-"+finalJourn+"-"+finalConf+"-"+finalRes+"-"+finalSubs);
				about=$('#about').val();
				indus=$('select[name="indus"]').val();
				teach=$('select[name="teach"]').val();
				rese=$('select[name="rese"]').val();
				name="";
				desig="";
				var formData = new FormData();
		formData.append("send","0215");
		formData.append('teach',teach);
		formData.append('rese',rese);
		formData.append('indus',indus);
		formData.append('finalProj',finalProj);
		formData.append('finalAch',finalAch);
		formData.append('finalJourn',finalJourn);
		formData.append('finalRes',finalRes);
		formData.append('finalSubs',finalSubs);
		formData.append('about',name);
		formData.append('Upload', $('#tup-upl')[0].files[0]);
		

		
				 $.ajax({
          type: "POST",
          url: "back.php",
          data: formData,
          //use contentType, processData for sure.
          contentType: false, 
          processData: false,
          beforeSend: function() {
         
            },
            success: function(msg) {                    
                alert("Data Successfully Inserted"); 
                console.log(msg);                
            },
            error: function() {                   
             
            }
        })

		});

</script>