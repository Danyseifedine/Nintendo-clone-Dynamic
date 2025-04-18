<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProductTag;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductTagPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('viewAny_product::tag');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProductTag $productTag): bool
    {
        return $user->can('{{ View }}');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_product::tag');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ProductTag $productTag): bool
    {
        return $user->can('update_product::tag');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProductTag $productTag): bool
    {
        return $user->can('delete_product::tag');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('{{ DeleteAny }}');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, ProductTag $productTag): bool
    {
        return $user->can('{{ ForceDelete }}');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('{{ ForceDeleteAny }}');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, ProductTag $productTag): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('{{ RestoreAny }}');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, ProductTag $productTag): bool
    {
        return $user->can('{{ Replicate }}');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('{{ Reorder }}');
    }
}
