
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
                <center><h5>ADMIN-PANEL</h5></center>
                <div class="row">

                <table id="dtExample" class="display">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                        </tr>
                    </tbody>
                </table>

    
                    <!--SECEND--->
                   


                       
                        </div>
    
    </div>
  @include('footer')

    <!-- Required common Js -->
    <script>
    $(document).ready( function () {
    $('#dtExample').DataTable();
} )
</script>
</body>

</html>