@extends('layouts.main-ext')
@section('css')
    <link href="https://cdn.bootcss.com/fancybox/3.5.2/jquery.fancybox.min.css" rel="stylesheet">
@stop
@section('js')
    <script src="https://cdn.bootcss.com/fancybox/3.5.2/jquery.fancybox.min.js"></script>
@stop
@section('breadcrumb')
    @include('breadcrumb-ext',['switch' => false])
@stop
@section('content')

    <div class="mdui-container-fluid">
        <br>
        <a href="{{ $file['download'] }}" data-fancybox><img
                class="mdui-img-fluid mdui-center" src="{{ $file['thumb'] }}" alt="{{ $file['name'] }}"/></a>
        <br>
        <div class="mdui-textfield">
            <label class="mdui-textfield-label" for="downloadUrl">下载地址</label>
            <input class="mdui-textfield-input" type="text" id="downloadUrl"
                   value="{{ route('download',\App\Helpers\Tool::getEncodeUrl($origin_path)) }}"/>
        </div>
        <div class="mdui-textfield">
            <label class="mdui-textfield-label" for="htmlUrl">HTML 引用地址</label>
            <input class="mdui-textfield-input" type="text" id="htmlUrl"
                   value="<img src='{{ route('view',\App\Helpers\Tool::getEncodeUrl($origin_path)) }}' />"/>
        </div>
        <div class="mdui-textfield">
            <label class="mdui-textfield-label" for="makdownUrl">Markdown 引用地址</label>
            <input class="mdui-textfield-input" type="text" id="makdownUrl"
                   value="![]({{ route('view',\App\Helpers\Tool::getEncodeUrl($origin_path)) }})"/>
        </div>
        <br>
    </div>
    <a href="{{ $file['download'] }}" class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent"><i
            class="mdui-icon material-icons">file_download</i></a>
@stop
