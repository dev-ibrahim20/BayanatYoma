<?php


namespace App\Actions\OurWork;

use App\Models\OurWork;

/**
 * Class UpdateOurWorkAction
 * @package App\Actions\OurWork
 */
class UpdateOurWorkAction
{
    public function execute($id, $data): void
    {
        $ourWork = OurWork::findOrFail($id);
        
        // Filter data to remove unwanted fields
        $filteredData = $this->filterData($data);
        
        // Handle image upload if new image is provided
        $this->handleUpload($filteredData, $ourWork);
        
        $this->handleDate($filteredData);
        $this->handelIsActive($filteredData);

        // Update the record
        $this->handleUpdate($id, $filteredData);
    }


    private function filterData(array $data): array
    {
        // Remove fields that shouldn't be in the database
        $unwantedFields = ['_token', '_method'];
        
        return array_filter($data, fn($key) => !in_array($key, $unwantedFields), ARRAY_FILTER_USE_KEY);
    }    



    private function handleUpload($data, $ourWork)
    {
        // Only handle image upload if a new image is provided
        if (isset($data['image']) && $data['image'] !== null) {
            $image = $data['image'];
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/our_work'), $imageName);
            
            // Delete old image if it exists
            if ($ourWork->image && file_exists(public_path('assets/images/our_work/' . $ourWork->image))) {
                unlink(public_path('assets/images/our_work/' . $ourWork->image));
            }
            
            // Set new image name
            $data['image'] = $imageName;
        } else {
            // Remove image from data array to keep the old one
            unset($data['image']);
        }
    }


    private function handleDate($data)
    {
        $data['date'] = now();
        return $data;
    }

    private function handelIsActive($data)
    {
        // The hidden input ensures is_active is always sent
        // 1 if checked, 0 if unchecked
        $data['is_active'] = $data['is_active'] ?? 0;
        return $data;
    }

    private function handleUpdate($id, $data)
    {
        OurWork::where('id', $id)->update($data);
    }


}