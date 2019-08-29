<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create(array('user_id' => 1,
        'document_id' => 1,
        'text' => 'If the picture has a nice caption- "That caption defines you so well"', 
        'reported' => 0));
        
        Comment::create(array('user_id' => 1,
        'document_id' => 2,
        'text' => 'Gorgeous', 
        'reported' => 0));

        Comment::create(array('user_id' => 1,
        'document_id' => 2,
        'text' => 'Beautiful', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 2,
        'text' => 'I am proud to have you as my best friend!', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 2,
        'text' => 'Love that!', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 2,
        'text' => 'I dont know what to say.This makes me speechless.', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 2,
        'text' => 'My words cant define you.', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 3,
        'text' => 'I dont know what to say because I am just bad at commenting beautiful pictures', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 3,
        'text' => 'Cute!(How did I forget this?)', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 3,
        'text' => 'Your beauty is irresistible!!', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 4,
        'text' => 'You look energetic.', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 4,
        'text' => 'Impressive picture.', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 4,
        'text' => 'You look strong and confident.', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 4,
        'text' => 'This picture is lit!!', 
        'reported' => 0));

        Comment::create(array('user_id' => 2,
        'document_id' => 4,
        'text' => 'Adorable picture.', 
        'reported' => 0));
        
        Comment::create(array('user_id' => 3,
        'document_id' => 4,
        'text' => 'Your smile makes me Happy.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 4,
        'text' => 'Looking Gorgeous .', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 4,
        'text' => 'This picture made my day.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'Your beauty has no boundaries.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'My word can’t describe this!!', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 2,
        'text' => 'Your eyes sparkle like something Ive never seen before.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'Youre beautiful as like your character.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'Youre young like your mind.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'I couldnt find a mistake in you, Gods best design youre.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'Dont be fool enough to think you can know a persons character after a few moments of observation. You cant. You have no idea where his life began or how his saga has unfolded thus far. Only his present state can you witness. To judge him at a glance is like reading one page in an open book, believing its enough to confidently recite the story from beginning to end. True, one page may tell you much, but not nearly enough to accurately critique a book or evaluate a life. So, either become his friend and learn his entire story, or refrain from commenting on a tale you know nothing about', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'A quote is not a conversation, but an invitation to change your perspective.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'I love you the more in that I believe you had liked me for my own sake and for nothing else.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'But man is not made for defeat. A man can be destroyed but not defeated.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'When you reach the end of your rope, tie a knot in it and hang on.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 5,
        'text' => 'There is nothing permanent except change.', 
        'reported' => 0));

        Comment::create(array('user_id' => 3,
        'document_id' => 6,
        'text' => 'You cannot shake hands with a clenched fist.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 6,
        'text' => 'Let us sacrifice our today so that our children can have a better tomorrow.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 6,
        'text' => 'The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 6,
        'text' => 'Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 6,
        'text' => 'Learning never exhausts the mind.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 7,
        'text' => 'There is no charm equal to tenderness of heart.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 7,
        'text' => 'All that we see or seem is but a dream within a dream.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 7,
        'text' => 'Lord, make me an instrument of thy peace. Where there is hatred, let me sow love.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 7,
        'text' => 'The only journey is the one within.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 7,
        'text' => 'Good judgment comes from experience, and a lot of that comes from bad judgment.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 7,
        'text' => 'Life without love is like a tree without blossoms or fruit.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 7,
        'text' => 'Think in the morning. Act in the noon. Eat in the evening. Sleep in the night.', 
        'reported' => 0));

        Comment::create(array('user_id' => 4,
        'document_id' => 8,
        'text' => 'No act of kindness, no matter how small, is ever wasted.', 
        'reported' => 0));

        Comment::create(array('user_id' => 1,
        'document_id' => 8,
        'text' => 'Love cures people - both the ones who give it and the ones who receive it.', 
        'reported' => 0));

        Comment::create(array('user_id' => 1,
        'document_id' => 8,
        'text' => 'Work like you dont need the money. Love like youve never been hurt. Dance like nobodys watching.', 
        'reported' => 0));
        
        Comment::create(array('user_id' => 1,
        'document_id' => 8,
        'text' => 'If you cannot do great things, do fucking nothing.', 
        'reported' => 1));
        
        Comment::create(array('user_id' => 2,
        'document_id' => 8,
        'text' => 'Independence is fucking happiness.', 
        'reported' => 1));
        
        Comment::create(array('user_id' => 3,
        'document_id' => 8,
        'text' => 'The supreme art of war is to subdue the enemy without kicking his ass.', 
        'reported' => 1));
        
        Comment::create(array('user_id' => 4,
        'document_id' => 9,
        'text' => 'Keep your face always toward the sunshine - and shadows will fall in your ass.', 
        'reported' => 1));
        
        Comment::create(array('user_id' => 4,
        'document_id' => 10,
        'text' => 'Happiness can exist only when your are dead.', 
        'reported' => 1));
    }
}