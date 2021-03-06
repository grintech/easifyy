<?php
namespace App\Controller\Superadmin;

use App\Controller\AppController;

/**
 * BlogCategories Controller
 *
 * @property \App\Model\Table\BlogCategoriesTable $BlogCategories
 *
 * @method \App\Model\Entity\BlogCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $blogCategories = $this->paginate($this->BlogCategories);

        $this->set(compact('blogCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogCategory = $this->BlogCategories->get($id, [
            'contain' => [],
        ]);

        $this->set('blogCategory', $blogCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //dd("a");
        $blogCategory = $this->BlogCategories->newEntity();
        if ($this->request->is('post')) {
            $data=$this->request->getData();

            $data['slug']=$this::slugify($data['name']); 

            $blogCategory = $this->BlogCategories->patchEntity($blogCategory, $data);
            if ($this->BlogCategories->save($blogCategory)) {
                $this->Flash->success(__('The blog category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog category could not be saved. Please, try again.'));
        }
        $this->set(compact('blogCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blogCategory = $this->BlogCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data=$this->request->getData();

            $data['slug']=$this::slugify($data['name']); 

            $blogCategory = $this->BlogCategories->patchEntity($blogCategory, $data);
            if ($this->BlogCategories->save($blogCategory)) {
                $this->Flash->success(__('The blog category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog category could not be saved. Please, try again.'));
        }
        $this->set(compact('blogCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogCategory = $this->BlogCategories->get($id);
        if ($this->BlogCategories->delete($blogCategory)) {
            $this->Flash->success(__('The blog category has been deleted.'));
        } else {
            $this->Flash->error(__('The blog category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public static function slugify($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
  
        // trim
        $text = trim($text, '-');
  
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
  
        // lowercase
        $text = strtolower($text);
  
        if (empty($text)) {
          return 'n-a';
        }
  
        return $text;
    }
  
}
