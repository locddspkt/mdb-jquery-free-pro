<style>
    .btn-rounded {
        border-radius: 10em;
    }

    .btn .fa-lg, .btn-floating .fa-lg {
        font-size: 1.33333em !important
    }

    .btn .fa-xs, .btn-floating .fa-xs {
        font-size: .75em !important
    }

    .btn .fa-sm, .btn-floating .fa-sm {
        font-size: .875em !important
    }

    .btn .fa-1x, .btn-floating .fa-1x {
        font-size: 1em !important
    }

    .btn .fa-2x, .btn-floating .fa-2x {
        font-size: 2em !important
    }

    .btn .fa-3x, .btn-floating .fa-3x {
        font-size: 3em !important
    }

    .btn .fa-4x, .btn-floating .fa-4x {
        font-size: 4em !important
    }

    .btn .fa-5x, .btn-floating .fa-5x {
        font-size: 5em !important
    }

    .btn .fa-6x, .btn-floating .fa-6x {
        font-size: 6em !important
    }

    .btn .fa-7x, .btn-floating .fa-7x {
        font-size: 7em !important
    }

    .btn .fa-8x, .btn-floating .fa-8x {
        font-size: 8em !important
    }

    .btn .fa-9x, .btn-floating .fa-9x {
        font-size: 9em !important
    }

    .btn .fa-10x, .btn-floating .fa-10x {
        font-size: 10em !important
    }

    .btn-floating {
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
        width: 47px;
        height: 47px;
        position: relative;
        z-index: 1;
        vertical-align: middle;
        display: inline-block;
        overflow: hidden;
        transition: all .2s ease-in-out;
        margin: 10px;
        border-radius: 50%;
        padding: 0;
        cursor: pointer
    }

    .btn-floating i,
    .btn-floating svg {
        font-size: 1.25rem;
        line-height: 47px
    }

    .btn-floating i,
    .btn-floating svg {
        display: inline-block;
        width: inherit;
        text-align: center;
        color: #fff
    }

    .btn-floating:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19)
    }

    .btn-floating:before {
        border-radius: 0
    }

    .btn-floating.btn-sm {
        width: 36.15385px;
        height: 36.15385px
    }

    .btn-floating.btn-sm i,
    .btn-floating.btn-sm svg {
        font-size: .96154rem;
        line-height: 36.15385px
    }

    .btn-floating.btn-lg {
        width: 61.1px;
        height: 61.1px
    }

    .btn-floating.btn-lg i, .btn-floating.btn-lg svg {
        font-size: 1.625rem;
        line-height: 61.1px
    }

    .fixed-action-btn {
        position: fixed;
        z-index: 998;
        right: 35px;
        bottom: 35px;
        margin-bottom: 0;
        padding-top: 15px
    }

    .fixed-action-btn ul {
        display: flex;
        flex-direction: column;
        transition: .4s height;
        position: absolute;
        bottom: 64px;
        height: 64px;
        left: 0;
        right: 0;
        margin: 0 0 15px;
        padding: 0;
        text-align: center
    }

    .fixed-action-btn ul li {
        display: flex;
        margin-bottom: 15px;
        margin-left: auto;
        margin-right: auto;
        z-index: 0
    }

    .fixed-action-btn ul a.btn-floating {
        opacity: 0;
        transition-duration: .4s;
        transform: scale(.4) translate(0)
    }

    .fixed-action-btn ul a.btn-floating.shown {
        transform: scale(1) translate(0);
        opacity: 1
    }

    .fixed-action-btn.active ul {
        height: 300px
    }

    .card.card-cascade .view.view-cascade.gradient-card-header .btn-floating {
        background-color: rgba(255, 255, 255, .2)
    }

    .carousel-multi-item .controls-top .btn-floating {
        background: #4285f4
    }

    .btn-floating.btn-flat {
        color: #fff;
        padding: 0;
        background: #4285f4
    }

    .btn-floating.btn-flat:hover {
        box-shadow: none
    }

    .btn-floating.btn-flat:focus, .btn-floating.btn-flat:hover {
        background-color: #5a95f5 !important
    }

    .btn-floating.btn-flat.active {
        background-color: #0b51c5 !important;
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15)
    }

    .contact-section .form .btn-floating {
        float: right;
        position: relative;
        bottom: 3rem;
        margin-right: 0
    }

    .btn.btn-flat {
        font-weight: 500;
        box-shadow: none;
        background-color: transparent;
        color: inherit
    }

    .btn.btn-flat:not([disabled]):not(.disabled):active {
        box-shadow: none
    }
    .btn-floating.btn-flat {
        color: #fff;
        padding: 0;
        background: #4285f4
    }

    .btn-floating.btn-flat:hover {
        box-shadow: none
    }

    .btn-floating.btn-flat:focus,.btn-floating.btn-flat:hover {
        background-color: #5a95f5!important
    }

    .btn-floating.btn-flat.active {
        background-color: #0b51c5!important;
        box-shadow: 0 5px 11px 0 rgba(0,0,0,.18),0 4px 15px 0 rgba(0,0,0,.15)
    }
</style>

<script>
    $(document).ready(function () {
        $('.fixed-action-btn').on('mousemove', function (event) {
            var $parent = $(this);
            if ($parent.is('.active')) return;
            $parent.addClass('active');
            $('ul li a', $parent).addClass('shown');
        });
        $('.fixed-action-btn').on('mouseout', function (event) {
            var $parent = $(this);
            $parent.removeClass('active');
            $('ul li a', $parent).removeClass('shown');
        });
    })
</script>