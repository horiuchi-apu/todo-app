@extends('layout')

@section('body')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ route('task.create') }}" class="btn btn-primary">追加</a>
                    </div>
                    <table class="table mt-3">
                        <tbody>
                        <tr>
                            <th>タイトル</th>
                            <th>内容</th>
                            <th>期限</th>
                            <th>完了日</th>
                            <th></th>
                        </tr>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->content }}</td>
                                <td>{{ $task->due }}</td>
                                <td>{{ $task->done ?? '----' }}</td>
                                <th>
                                    @if ($task->done)
                                        <button class="btn btn-primary" disabled>
                                            完了にする
                                        </button>
                                    @else
                                        <a class="btn btn-primary" href="{{ route('task.done', ['id' => $task->id]) }}">
                                            完了にする
                                        </a>
                                    @endif
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection