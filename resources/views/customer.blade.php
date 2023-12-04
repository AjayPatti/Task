
<!DOCTYPE html>
<html lang="en">

@include('header')

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
       @include('navbar')

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
          @include('searchbar')
            <!--// top-bar -->

            <div class="container">
                <center><h5>CUSTOMER-PANEL</h5></center>
               <?php 
               if($login_type == 'admin') { ?>
                   <a href="{{ route('add') }}" class="btn btn-primary ">Add</a>
            <?php   }  ?>
               
             
                <div class="row">
                    <div class="col-sm-12">
                            <table id="dtExample" class="display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Login Type</th>
                                        <th>Admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $count = 1; ?>
                                    @foreach($data as $key=>$customer)
                                        <?php  
                                        if($customer['approve_status'] =='1' ){
                                              $style="background-color:#28a745;color:black";
                                        }else if($customer['reject'] =='0'){
                                            $style="background-color:red;color:black";
                                        }
                                        else{
                                            $style ='';
                                        }   
                                      
                                        ?>
                                    <tr style="{{$style}}">

                                        <td>{{$count}}</td>
                                        <td>{{$customer['name']}}</td>
                                        <td>{{$customer['email']}}</td>
                                        <td>{{$customer['login_type']}}</td>
                                        <td>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"  data-id="{{$customer['id']}}" onclick="Edit(this)" title="Approve"><i class="fa-solid fa-pen-to-square"></i><a>
                                            <?php  if($customer['approve_status'] != '1 ' && $customer['reject'] !='0' ){?>  
                                            <a href="javascript:void(0)"  data-id="{{$customer['id']}}" onclick="approve(this)"title="Approve"><i class="fa-solid fa-check"></i></a>
                                            <?php }?>
                                                    <?php  if($customer['approve_status'] != '1 ' && $customer['reject'] !='0'){?>
                                            <a href="javascript:void(0)"  data-id="{{$customer['id']}}" onclick="reject(this)" title="Reject" ><i class="fa-solid fa-xmark"></i></a>
                                       <?php  } ?>
                                        </td>
                                      
                                    </tr>
                                    <?php $count ++; ?>
                                    @endforeach
                                 
                                </tbody>
                            </table>

                </div>

    
                    <!--SECEND--->
                   


                       
                        </div>
    
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="#" method="post" class="p-lg-5" id="addform">
                @csrf
          <div class="form-group">
            <!-- <label for="exampleInputEmail1"> Name</label> -->
            <input type="text" class="form-control" name="name" id="name"  placeholder="Name">
            <span id="name_error" class=" text-danger"></span>
          </div>
            <input type="hidden" name="id" id="user_id">
          <div class="form-group">
           <!-- <label for="exampleInputEmail1">Email Id</label> -->
            <input type="email" class="form-control" id="email" name=" email"placeholder="Email Id" >
            <span id="email_error" class=" text-danger"></span>
          </div><div class="form-group">
            <!-- <label for="exampleInputEmail1">Password</label> -->
            <!-- <input type="text" class="form-control" name="password"placeholder="Password"> -->
            <span id="password_error" class=" text-danger" ></span>
          </div>
       
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  @include('footer')

    <!-- Required common Js -->
    <script>
    $(document).ready( function () {
    $('#dtExample').DataTable();
} )
function approve(elem){
    console.log()
let id =$(elem).data('id');
    $.ajax({
        type: "post",
        url: "{{route('approve-status')}}",
        data: {"_token": "{{ csrf_token() }}", id: id},
        dataType: "dataType",
        success: function (response) {
            console.log(response)
                alert('Approved Successfully done')
                location.reload()

            
        }
    });
}
function Edit(elem){
    let id =$(elem).data('id');
    $('#user_id').val(id)
    console.log(id)
    $('#email').val('')
    $('#name').val('')
    $.ajax({
        type: "get",
        url: "{{route('edit')}}",
        data: { id: id},
        success: function (response) {
                json =response[0];
                $('#email').val(json.email)
                $('#name').val(json.name)

        }
    })
   
}
function reject(elem){
    console.log()
let id =$(elem).data('id');
    $.ajax({
        type: "post",
        url: "{{route('reject')}}",
        data: {"_token": "{{ csrf_token() }}", id: id},
        dataType: "dataType",
        success: function (response) {
            console.log(response)
                alert('Rejected')
                location.reload()

            
        }
    });
}
</script>
</body>

</html>