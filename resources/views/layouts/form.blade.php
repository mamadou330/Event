
<div class="form-group">
     <input type="text" name="title" class="form-control" placeholder="Titre de l'evenement" value="{{ old('title') ?? $event->title }}">
     {!! $errors->first('title', '<p class="text-danger">:message</p>') !!}
</div>
<div class="from-group">
     <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control">{{ old('description') ?? $event->description }}</textarea>
     {!! $errors->first('description', '<p class="text-danger">:message</p>') !!}
</div><br>
<div class="form-group">
     <button type="submit" class="btn btn-primary btn-block">{{ $submitButtonText }} </button>
</div>
