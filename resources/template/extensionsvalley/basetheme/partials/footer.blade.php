 <footer id="fh5co-footer">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                     @includeIf('Basetheme::position.loadview',['position'=> 'footer-widget'])
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="fh5co-footer-widget top-level">
                       @includeIf('Basetheme::position.loadview',['position'=> 'footer-menu1'])
                    </div>
                </div>

                <div class="visible-sm-block clearfix"></div>

                <div class="col-md-2 col-sm-6">
                    <div class="fh5co-footer-widget top-level">
                       @includeIf('Basetheme::position.loadview',['position'=> 'footer-menu2'])
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="fh5co-footer-widget top-level">
                        @includeIf('Basetheme::position.loadview',['position'=> 'footer-menu3'])
                    </div>
                </div>

            </div>

            <div class="row fh5co-row-padded fh5co-copyright">
                <div class="col-md-5">
                    <p><small>{{ \WebConf::get('copy_right')}} <br>Designed by: <a href="http://extensionsvalley.com/" target="_blank">Extensions Valley</a></small></p>
                </div>
            </div>
        </div>

    </footer>
