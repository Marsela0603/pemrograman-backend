<?php

class Animal {
    // Properti untuk menyimpan daftar hewan dalam bentuk array
    public $animals;

    // Konstruktor untuk mengisi untuk mengisi data awal
    public function __construct() {
        $this->animals = ['Kucing', 'Kambing', 'Kuda']; // Daftar hewan awal
    }

    // Method untuk menampilkan semua hewan yang ada di dalam array
    public function index() {
        foreach ($this->animals as $key => $animal) {
            echo ($key + 1) . ". " . $animal . "\n";
        }
    }

    // Method untuk menambah hewan baru ke dalam daftar
    public function store($newAnimal) {
        array_push($this->animals, $newAnimal);
        echo "$newAnimal berhasil ditambahkan ke daftar!\n";
    }

    // Method untuk mengubah data hewan berdasarkan posisi/index tertentu
    public function update($index, $updatedAnimal) {
        if (isset($this->animals[$index])) {
            $oldAnimal = $this->animals[$index];
            $this->animals[$index] = $updatedAnimal;
            echo "$oldAnimal telah diperbarui menjadi $updatedAnimal!\n";
        } else {
            echo "Hewan dengan nomor urut $index tidak ditemukan.\n";
        }
    }

    // Method untuk menghapus hewan dari daftar berdasarkan index
    public function destroy($index) {
        if (isset($this->animals[$index])) {
            $removedAnimal = $this->animals[$index];
            unset($this->animals[$index]);
            echo "$removedAnimal berhasil dihapus dari daftar!\n";
        } else {
            echo "Hewan dengan nomor urut $index tidak ditemukan.\n";
        }
    }
}

// Contoh penggunaan class Animal
$animal = new Animal();

echo "Daftar hewan saat ini:\n";
$animal->index();

echo "\nMenambah hewan baru:\n";
$animal->store('Singa');
$animal->index();

echo "\nMengubah data hewan:\n";
$animal->update(1, 'Gajah');
$animal->index();

echo "\nMenghapus hewan dari daftar:\n";
$animal->destroy(2);
$animal->index();

?>
