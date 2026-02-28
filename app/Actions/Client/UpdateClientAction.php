<?php


namespace App\Actions\Client;

use App\Models\Client;

class UpdateClientAction
{
    public function execute($id, $data): void
    {
        $client = Client::findOrFail($id);
        
        // Filter data to remove unwanted fields
        $filteredData = $this->filterData($data);
        
        // Handle image upload if new image is provided
        $filteredData = $this->handelUploade($filteredData, $client);
        
        $this->handleUpdate($id, $filteredData);
    }

    public function filterData($data): array
    {
        $unwantedFields = ['_token', '_method'];
        return array_filter($data, fn($key) => !in_array($key, $unwantedFields), ARRAY_FILTER_USE_KEY);
    }

    public function handelUploade($data, $client)
    {
        // Only handle image upload if a new image is provided
        if (isset($data['image']) && $data['image'] !== null) {
            $image = $data['image'];
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/client'), $imageName);
            
            // Delete old image if it exists
            if ($client->image && file_exists(public_path($client->image))) {
                unlink(public_path($client->image));
            }
            
            // Set new image name
            $data['image'] = 'assets/images/client/' . $imageName;
        } else {
            // Remove image from data array to keep the old one
            unset($data['image']);
        }
        
        return $data;
    }

    public function updateStatus($id, $status): void
    {
        $client = Client::findOrFail($id);
        $client->update(['status' => $status]);
    }

    public function handleUpdate($id, $data): void
    {
        Client::where('id', $id)->update($data);
    }
}