 <div class="main-content">
            <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-plus"></i>
                        Add Question </h3>
                    </div>

                </div>
            </div>
        
 
             
           
 
 
 <div class="box-content padded">
		<div class="tab-content">
   
   
   
				<h3>Add Question</h3> s
     <form method="post" action="<?php echo site_url('qbank/new_question_5/'.$nop);?>">
	
<div class="col-md-8">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
		
		
				<div class="form-group">	 
					<?php echo $this->lang->line('long_answer');?>

			</div>

			
			<div class="form-group">	 
					<label   ><?php echo $this->lang->line('select_category');?></label> 
					<select class="form-control" name="cid">
					<?php 
					foreach($category_list as $key => $val){
						?>
						
						<option value="<?php echo $val['cid'];?>"><?php echo $val['category_name'];?></option>
						<?php 
					}
					?>
					</select>
			</div>
			
			
			<div class="form-group">	 
					<label   ><?php echo $this->lang->line('select_level');?></label> 
					<select class="form-control" name="lid">
					<?php 
					foreach($level_list as $key => $val){
						?>
						
						<option value="<?php echo $val['lid'];?>"><?php echo $val['level_name'];?></option>
						<?php 
					}
					?>
					</select>
			</div>

			
			

			<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('question');?></label> 
					<textarea  name="question"  class="form-control"   ></textarea>
			</div>
			<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('description');?></label> 
					<textarea  name="description"  class="form-control"></textarea>
			</div>
	 

 
	<button class="btn btn-default" type="submit"><?php echo $this->lang->line('submit');?></button>
 
		</div>
</div>
 
 
 
 
</div>
      </form>
</div>

 



</div>