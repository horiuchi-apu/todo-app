@extends('layout')

@section('body')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mt-3">
                        {!! form($form) !!}
                        <a href="{{ route('task.index') }}" class="mt-1 btn btn-block btn-secondary">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection