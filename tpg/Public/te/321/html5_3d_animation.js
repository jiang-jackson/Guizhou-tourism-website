(function(a){
    a.fn.html5_3d_animation=function(p){
        var p=p||{};

        var w_w=p&&p.window_width?p.window_width:"500";
        var w_h=p&&p.window_height?p.window_height:"400";
        var w_b=p&&p.window_background?p.window_background:"#000";
        var s_c=p&&p.star_count?p.star_count:"600";
        var s_color=p&&p.star_color?p.star_color:"#FFF";
        var s_d=p&&p.star_depth?p.star_depth:"250";
        var dom=a(this);
        var fov = parseInt(s_d);
        var SCREEN_WIDTH = parseInt(w_w);
        var SCREEN_HEIGHT = parseInt(w_h);
        var HALF_WIDTH = SCREEN_WIDTH/2;
        var HALF_HEIGHT = SCREEN_HEIGHT/2;
        var c_id = dom.attr("id");
        var numPoints = s_c;
        dom.attr({ width: w_w, height: w_h});
        setup();
        function setup()
        {




            function draw3Din2D(point3d)
            {
                x3d = point3d[0];
                y3d = point3d[1];
                z3d = point3d[2];
                var scale = fov/(fov+z3d);
                var x2d = (x3d * scale) + HALF_WIDTH;
                var y2d = (y3d * scale)  + HALF_HEIGHT;


                c.lineWidth= scale;
                c.strokeStyle = s_color;
                c.beginPath();
                c.moveTo(x2d,y2d);
                c.lineTo(x2d+scale,y2d);
                c.stroke();

            }

            var canvas = document.getElementById(c_id);
            var c = canvas.getContext('2d');

            var points = [];

            function initPoints()
            {
                for (i=0; i<numPoints; i++)
                {
                    point = [(Math.random()*400)-200, (Math.random()*400)-200 , (Math.random()*400)-200 ];
                    points.push(point);
                }

            }

            function render()
            {

                c.fillStyle=w_b;
                c.fillRect(0,0, SCREEN_WIDTH, SCREEN_HEIGHT);

                for (i=0; i<numPoints; i++)
                {
                    point3d = points[i];

                    z3d = point3d[2];
                    z3d-=4;
                    if(z3d<-fov) z3d +=400;
                    point3d[2] = z3d;


                    draw3Din2D(point3d);

                }
                var show = document.getElementById('show');
                show.appendChild('p');
            }

            initPoints();

            var loop = setInterval(function(){
                render();
            }, 50);

        }
    /*
        var canvas = document.getElementById('webwidget_html5_star_backgorund');

        var c = canvas.getContext('2d');

        var points = [];
        initPoints();

        var loop = setInterval(render, 50);
        function draw3Din2D(point3d)
        {
            x3d = point3d[0];
            y3d = point3d[1];
            z3d = point3d[2];
            var scale = parseInt(fov/(fov+z3d));
            var x2d = (x3d * scale) + HALF_WIDTH;
            var y2d = (y3d * scale)  + HALF_HEIGHT;


            c.lineWidth= scale;
            c.strokeStyle = s_color;
            c.beginPath();
            c.moveTo(x2d,y2d);
            c.lineTo(x2d+scale,y2d);
            c.stroke();

        }
        function initPoints(){
            for (i=0; i<numPoints; i++)
            {
                point = [(Math.random()*400)-200, (Math.random()*400)-200 , (Math.random()*400)-200 ];
                points.push(point);
            }

        }
        function render()
        {
            
            c.fillStyle=w_b;
            c.fillRect(0,0, SCREEN_WIDTH, SCREEN_HEIGHT);

            for (i=0; i<numPoints; i++)
            {
                point3d = points[i];

                z3d = point3d[2];
                z3d-=4;
                if(z3d<-fov) z3d +=400;
                point3d[2] = z3d;


                draw3Din2D(point3d);

            }
        }*/
    }
})(jQuery);