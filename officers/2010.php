<?php 
    $page_title = '2010 Officers';
    $site_title = 'Purdue IEEE';
    $site_index = '/';
    $root = true;
    include '../header.php';
?>

    <div class="well card-1 text-dark">

        <!--- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <?php 
                    	$active2010 = 'class="active"';
                    	include 'header.php';
                    ?>
                </ul>
            </div>
        </div>

        <hr />
        <!-- President -->
        <div class="row">
            <div class="col-md-3">
                <div class="officer-cropped"
                    style="background-image: url('/images/officers/.jpg')">
                </div>
            </div>
            <div class="col-md-9">
                <h3>Greg Brener</h3>
                <h4>President </h4>
                <p></p>
                <p><em>Committee Involvement</em>: <a href="/professional/">Industrial Relations</a></p>
            </div>
        </div>
        <!-- /.row -->
    </div>

<?php include '../footer.php'; ?>
