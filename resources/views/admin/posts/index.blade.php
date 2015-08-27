@extends('admin.tpl-admin')

@section('content')

        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-8">
                    <h2>Posts Admin</h2>
                </div>
                <div class="col-xs-4">
                    <a  href="{{route('admin.posts.create')}}" class="btn pull-right btn-success"><i class="fa fa-plus"></i> Cadastrar</a>
                </div>
            </div>

            @if(isset($posts) && $posts)
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed">
                        <thead>
                        <tr>
                            <th class="col-xs-1">ID</th>
                            <th>Titulo</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $posts as $post)
                            <tr>
                                <td>{{ $post->id  }}</td>
                                <td> {{ $post->title  }}</td>
                                <td style="width: 65px;">
                                    <a href="{{route('admin.posts.edit',['id'=>$post->id])}}"><i class="fa fa-pencil-square-o"></i></a>
                                    |
                                    <a data-trigger-delete href="{{route('admin.posts.destroy',['id'=>$post->id])}}"><i class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        <tfooter>
                            <tr>
                                <td colspan="3">
                                    {!! $posts->render() !!}
                                </td>
                            </tr>

                        </tfooter>
                    </table>
                </div>

            @endif
        </div>

@stop