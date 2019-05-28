<footer class="mainFooter mt-5 py-2  text-center">
    <p class="lead ">&copy; Panos 
        <?php 
        if (date('Y') == 2019) {
             echo '2019';
        } else {
            echo '2019' . '-' . date('Y');
        }
        
        ;?>
    </p>
</footer>

<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo URLROOT;?>/js/swiper.min.js"></script>
<script src="<?php echo URLROOT;?>/js/main.js"></script>
</body>
</html>