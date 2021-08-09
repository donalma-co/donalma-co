@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.type.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.type.fields.id') }}
                        </th>
                        <td>
                            {{ $type->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.type.fields.name') }}
                        </th>
                        <td>
                            {{ $type->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.type.fields.code') }}
                        </th>
                        <td>
                            {{ $type->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.type.fields.image') }}
                        </th>
                        <td>
                            @foreach($type->image as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#type_organizations" role="tab" data-toggle="tab">
                {{ trans('cruds.organization.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="type_organizations">
            @includeIf('admin.types.relationships.typeOrganizations', ['organizations' => $type->typeOrganizations])
        </div>
    </div>
</div>

@endsection