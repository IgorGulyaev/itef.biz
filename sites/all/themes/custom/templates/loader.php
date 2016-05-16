<style>
    /* Main styles */
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:800);

    .text {
        fill: url(#gr-radial);
    }

    #loadDum {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: #00080f -webkit-linear-gradient(0deg, #00080f 50%, #030e18 50%);
        background: #00080f linear-gradient(90deg, #00080f 50%, #030e18 50%);
        background-size: .2em 100%;
        font: 60px/1 Open Sans, Impact;
        text-transform: uppercase;
        margin: 0;
        z-index: 50000;
    }
    .svg-sub {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 50000;
        font: 16px/2 Open Sans, Impact;
        text-transform: uppercase;
        margin: 0;
    }

    svg {
        position: absolute;
        width: 100%;
        height: 100%;
    }

</style>

<div id="loadDum">
    <svg viewBox="0 0 600 300">

        <!-- Gradient -->
        <radialGradient id="gr-radial"
                        cx="50%" cy="50%" r="70%"
            >
            <!-- Animation for radius of gradient -->
            <animate attributeName="r"
                     values="0%;150%;100%;0%"
                     dur="3s" repeatCount="indefinite" />
            <!-- Animation for colors of stop-color -->
            <stop stop-color="#FFF" offset="0">
                <animate attributeName="stop-color"
                         values="#333;#FFF;#FFF;#333"
                         dur="3s" repeatCount="indefinite" />
            </stop>
            <stop stop-color="rgba(55,55,55,0)" offset="100%"/>
        </radialGradient>

        <!-- Text -->
        <text text-anchor="middle"
              x="50%"
              y="50%"
              dy=".35em"
              class="text"
            >
            ITEF
        </text>
    </svg>
    <div class="svg-sub">
        <svg viewBox="0 0 600 300">

            <!-- Gradient -->
            <radialGradient id="gr-radial"
                            cx="50%" cy="50%" r="70%"
                >
                <!-- Animation for radius of gradient -->
                <animate attributeName="r"
                         values="0%;150%;100%;0%"
                         dur="3s" repeatCount="indefinite" />
                <!-- Animation for colors of stop-color -->
                <stop stop-color="#FFF" offset="0">
                    <animate attributeName="stop-color"
                             values="#333;#FFF;#FFF;#333"
                             dur="3s" repeatCount="indefinite" />
                </stop>
                <stop stop-color="rgba(55,55,55,0)" offset="100%"/>
            </radialGradient>

            <!-- Text -->
            <text text-anchor="middle"
                  x="50%"
                  y="65%"
                  dy=".65em"
                  class="text"
                >
                web development
            </text>
        </svg>
    </div>
</div>