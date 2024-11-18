@foreach ($newsletters as $newsletter)
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="deleteSliderModal{{ $newsletter->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSliderModalLabel"> Delete Newsletter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <form action="{{ route('newsletter.destroy', $newsletter->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" id="id" value="{{ $newsletter->id }}">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" id="confirmDelete">delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach