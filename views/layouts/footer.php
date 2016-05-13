    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-right"><b>All Copyriths reserved 
                    <img src="/template/images/reklama/BT_copyright-128.png" WIDTH="20" HEIGHT="20" > <?=date('Y') ?></b>
                    <a href="http://www.vk.com"><img src="/template/images/reklama/vk.png" WIDTH="50" HEIGHT="50"> </a>
                    <a href="http://www.twitter.com"><img src="/template/images/reklama/twt.png" WIDTH="42" HEIGHT="42"></a>
                    <a href="http://www.facebook.com"><img src="/template/images/reklama/fcb.png" WIDTH="42" HEIGHT="42"> </a>
                    </p>
                
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>