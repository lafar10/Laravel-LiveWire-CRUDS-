<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="close_modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <form wire:submit.prevent="saveStudent">

                    <div class="mb-3">
                        <label for="">name</label>
                        <input type="text" class="form-control" wire:model="name" id="">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email :</label>
                        <input type="email" class="form-control" wire:model="email" id="">
                        @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Course :</label>
                        <input type="text" class="form-control" wire:model="course" id="">
                        @error('course') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                   <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="close_modal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                 </form>
            </div>

        </div>
    </div>
</div>


<!--Update Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                <button type="button" class="btn-close" wire:click="close_modal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <form wire:submit.prevent="updateStudent">

                    <div class="mb-3">
                        <label for="">name</label>
                        <input type="text" class="form-control" wire:model="name" id="">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email :</label>
                        <input type="email" class="form-control" wire:model="email" id="">
                        @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Course :</label>
                        <input type="text" class="form-control" wire:model="course" id="">
                        @error('course') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                   <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="close_modal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                 </form>
            </div>

        </div>
    </div>
</div>


<!--Delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="destroyStudent">
                    <h5 class="display-7">Are You Sure You Want to Delete This Student ?</h5>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
