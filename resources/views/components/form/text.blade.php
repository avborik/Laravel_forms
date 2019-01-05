<div class="form-group">
    {{ Form::label($name, ucfirst($name)) }}
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>