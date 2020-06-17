<script>
window.onscroll = function() {
                        let scroll = (document.documentElement.scrollTop ||
                                document.body.scrollTop);
        //alert(scroll);
                        if (scroll > 250) {
                            document.getElementById('tete').style.position = 'fixed'
                            // &&
                            // document.getElementById('tete').style.top =  '0px';
                        } 
                        else if (scroll < 250 || scroll === 250) {
                            document.getElementById('tete').style.position = 'absolute' 
                            // &&
                            // document.getElementById('tete').style.top = 170 + 'px';
                        }
                   
                }

</script>