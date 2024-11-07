<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataScience = Category ::with('writer')->where('name', 'Data Science')->first();
        $networkSecurity = Category::with('writer')->where('name', 'Network Security')->first();
        
        $dataScienceWriters = $dataScience->writer()->get()->shuffle();
        $networkSecurityWriters = $networkSecurity->writer()->get()->shuffle();
        Article::create([
            'title' => 'Machine Learning',
            'slug' => 'machine-learning',
            'body' => 'What is machine learning? Machine learning (ML) is a branch of 
            and computer science that focuses on the using data and algorithms to enable AI to imitate the way that humans learn, gradually improving its accuracy.
            How does machine learning work? breaks out the learning system of a machine learning algorithm into three main parts.
            A Decision Process: In general, machine learning algorithms are used to make a prediction or classification. Based on some input data, which can be labeled or unlabeled, your algorithm will produce an estimate about a pattern in the data.
            An Error Function: An error function evaluates the prediction of the model. If there are known examples, an error function can make a comparison to assess the accuracy of the model.
            A Model Optimization Process: If the model can fit better to the data points in the training set, then weights are adjusted to reduce the discrepancy between the known example and the model estimate. The algorithm will repeat this iterative “evaluate and optimize” process, updating weights autonomously until a threshold of accuracy has been met.',
            'banner_url' => 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/6FKRfGRZHgDcW6yvBeh1lF/3e8197c12e158d61998938349ede074b/GettyImages-1175946304.jpg?w=1500&h=680&q=60&fit=fill&f=faces&fm=jpg&fl=progressive&auto=format%2Ccompress&dpr=1&w=1000',
            'writer_id' =>  $dataScienceWriters->first()->id,
            'category_id' => $dataScience->id,
        ]);
        Article::create([
            'title' => 'Deep Learning',
            'slug' => 'deep-learning',
            'body' => 'Deep learning is a method in artificial intelligence (AI) that teaches computers to process data in a way that is inspired by the human brain. Deep learning models can recognize complex patterns in pictures, text, sounds, and other data to produce accurate insights and predictions. You can use deep learning methods to automate tasks that typically require human intelligence, such as describing images or transcribing a sound file into text. ',
            'banner_url' => 'https://media.geeksforgeeks.org/wp-content/uploads/20240524152118/Introduction-to-Deep-learning-copy.webp',
            'writer_id' =>  $dataScienceWriters->first()->id,
            'category_id' => $dataScience->id,
        ]);
        Article::create([
            'title'=>'Natural Language Processing',
            'slug' => 'natural-language-processing',
            'body' => 'Natural language processing (NLP) is a subfield of computer science and artificial intelligence (AI) that uses machine learning to enable computers to understand and communicate with human language. NLP enables computers and digital devices to recognize, understand and generate text and speech by combining computational linguistics—the rule-based modeling of human language—together with statistical modeling, machine learning and deep learning.',
            'banner_url' => 'https://media.geeksforgeeks.org/wp-content/uploads/20240524132640/nlp-banner.webp',
            'writer_id' =>  $dataScienceWriters->first()->id,
            'category_id' => $dataScience->id,
        ]);

        Article::create([
            'title' => 'Software Security',
            'slug' => 'software-security',
            'body' => 'Software security is simply a collection of methods used to protect computer programs and the sensitive information handled by them against malicious attacks. It covers a wide range of functions to safeguard software and its correlated data on privacy, accuracy, and accessibility respectively.',
            'banner_url' => 'https://cpl.thalesgroup.com/sites/default/files/content/SM_pages/sm-general-image-3.jpg',
            'writer_id' =>  $networkSecurityWriters->first()->id,
            'category_id' => $networkSecurity->id,
        ]);
        Article::create([
            'title'=> 'Network Administration',
            'slug' => 'network-administration',
            'body' => 'A network administrator is an information technology (IT) professional. Their job is to secure, maintain, and troubleshoot computer networks, which are groups of computers sharing information. Organizations employ network administrators to ensure their networks operate efficiently and meet business requirements.',
            'banner_url' => 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5kpKJ1y7C4POgZv2BL4DZT/9f51821b9fab6c0622330797e19ee788/iStock-542298764_super.jpg?w=1500&h=680&q=60&fit=fill&f=faces&fm=jpg&fl=progressive&auto=format%2Ccompress&dpr=1&w=1000',
            'writer_id' => $networkSecurityWriters->first()->id,
            'category_id' => $networkSecurity->id,
        ]);
        Article::create([
            'title' => 'Popular Network Technology',
            'slug' => 'popular-network-technology',
            'body' => "In todays interconnected world, the importance of network security has grown exponentially. As organizations and individuals rely more heavily on digital networks for communication, commerce, and information exchange, protecting these networks has become crucial. This article explores what network security is, why it's essential, and some popular strategies used to safeguard our digital infrastructure.",
            'banner_url' => 'https://cdn.comparitech.com/wp-content/uploads/2023/10/Top-Networking-Technologies.jpeg',
            'writer_id' => $networkSecurityWriters->first()->id,
            'category_id' => $networkSecurity->id,
        ]);
    }
}
