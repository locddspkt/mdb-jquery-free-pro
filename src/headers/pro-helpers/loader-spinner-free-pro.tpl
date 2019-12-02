<style>
    @-webkit-keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: .25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner-border .75s linear infinite;
        animation: spinner-border .75s linear infinite
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: .2em
    }

    @-webkit-keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        50% {
            opacity: 1
        }
    }

    @keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        50% {
            opacity: 1
        }
    }

    .spinner-grow {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner-grow .75s linear infinite;
        animation: spinner-grow .75s linear infinite
    }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem
    }

    .fast.spinner-border {
        animation: spinner-border .4s linear infinite
    }

    .fast.spinner-grow {
        animation: spinner-grow .4s linear infinite
    }

    .fast.spinner-border {
        animation: spinner-border .4s linear infinite
    }

    .fast.spinner-grow {
        animation: spinner-grow .4s linear infinite
    }

    .preloader-wrapper .spinner-layer {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0
    }

    .preloader-wrapper .spinner-layer .gap-patch {
        position: absolute;
        top: 0;
        left: 45%;
        width: 10%;
        height: 100%;
        overflow: hidden;
        border-color: inherit
    }

    .preloader-wrapper .spinner-layer .gap-patch .circle {
        width: 1000%;
        left: -450%
    }

    .preloader-wrapper .spinner-layer .circle-clipper {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 100%;
        overflow: hidden;
        border-color: inherit
    }

    .preloader-wrapper .spinner-layer .circle-clipper .circle {
        width: 200%;
        height: 100%;
        border-width: .1875rem;
        border-style: solid;
        border-color: inherit;
        border-bottom-color: transparent!important;
        border-radius: 50%;
        animation: none;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0
    }

    .preloader-wrapper .spinner-layer .circle-clipper.left .circle {
        left: 0;
        border-right-color: transparent!important;
        transform: rotate(129deg)
    }

    .preloader-wrapper .spinner-layer .circle-clipper.right .circle {
        left: -100%;
        border-left-color: transparent!important;
        transform: rotate(-129deg)
    }

    .preloader-wrapper .spinner-blue,.preloader-wrapper .spinner-blue-only {
        border-color: #4285f4
    }

    .preloader-wrapper .spinner-red,.preloader-wrapper .spinner-red-only {
        border-color: #db4437
    }

    .preloader-wrapper .spinner-yellow,.preloader-wrapper .spinner-yellow-only {
        border-color: #f4b400
    }

    .preloader-wrapper .spinner-green,.preloader-wrapper .spinner-green-only {
        border-color: #0f9d58
    }
    
</style>

<script>
    $(document).ready(function () {
    })
</script>