<?php

namespace Database\migrate\data;
use Database\migrate\data\contract\DataMigratory;

final class MigrateData implements DataMigratory
{
    public final function fillUsersTable(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Denis',
                'surname' => 'Lopatin',
                'password' => 'DenisL3588*',
                'email' => 'www.denis-lopatin@mail.com'
            ],
            [
                'id' => 2,
                'name' => 'William',
                'surname' => 'Johnson',
                'password' => 'Ann12Lo3#',
                'email' => 'www.william-johnson@mail.com'
            ],
            [
                'id' => 3,
                'name' => 'Emma',
                'surname' => 'Garcia',
                'password' => 'Mark1092T@',
                'email' => 'www.emma-garcia@mail.com'
            ],
            [
                'id' => 4,
                'name' => 'Lucas',
                'surname' => 'Martinez',
                'password' => 'i2983NkO$',
                'email' => 'www.lucas-martinez@mail.com'
            ],
            [
                'id' => 5,
                'name' => 'Sophia',
                'surname' => 'Lee',
                'password' => '12345%',
                'email' => 'www.sophia-lee@mail.com'
            ],
            [
                'id' => 6,
                'name' => 'Ethan',
                'surname' => 'Kim',
                'password' => 'black_0891^',
                'email' => 'www.ethan-kim@mail.com'
            ],
            [
                'id' => 7,
                'name' => 'Olivia',
                'surname' => 'Lopez',
                'password' => '739966619&',
                'email' => 'www.olivia-lopez@mail.com'
            ],
            [
                'id' => 8,
                'name' => 'Jacob',
                'surname' => 'Gonzalez',
                'password' => 'kat1088(',
                'email' => 'www.jacob-gonzalez@mail.com'
            ],
            [
                'id' => 9,
                'name' => 'Isabella',
                'surname' => 'Kim',
                'password' => 'ivan4559987)',
                'email' => 'www.isabella-kim@mail.com'
            ],
            [
                'id' => 10,
                'name' => 'David',
                'surname' => 'Lee',
                'password' => 'ksenia_0820_',
                'email' => 'www.david-lee@mail.com'
            ]
        ];
    }

    public final function fillTodosTable(): array
    {
        return [
            [
                'id' => 1,
                'user_id' => 1,
                'todo' => 'Go grocery shopping'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'todo' => 'Do the dishes'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'todo' => 'Take the dog for a walk'
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'todo' => 'Brush your teeth'
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'todo' => 'Read a book'
            ],
            [
                'id' => 6,
                'user_id' => 2,
                'todo' => 'Do yoga'
            ],
            [
                'id' => 7,
                'user_id' => 2,
                'todo' => 'Wash the car'
            ],
            [
                'id' => 8,
                'user_id' => 2,
                'todo' => 'Cook dinner'
            ],
            [
                'id' => 9,
                'user_id' => 2,
                'todo' => 'Write a letter'
            ],
            [
                'id' => 10,
                'user_id' => 2,
                'todo' => 'Watch a movie'
            ],
            [
                'id' => 11,
                'user_id' => 3,
                'todo' => 'Go for a run'
            ],
            [
                'id' => 12,
                'user_id' => 3,
                'todo' => 'Clean the bathroom'
            ],
            [
                'id' => 13,
                'user_id' => 3,
                'todo' => 'Water the plants'
            ],
            [
                'id' => 14,
                'user_id' => 3,
                'todo' => 'Do laundry'
            ],
            [
                'id' => 15,
                'user_id' => 3,
                'todo' => 'Call your mom'
            ],
            [
                'id' => 16,
                'user_id' => 4,
                'todo' => 'Study for the exam'
            ],
            [
                'id' => 17,
                'user_id' => 4,
                'todo' => 'Clean the kitchen'
            ],
            [
                'id' => 18,
                'user_id' => 4,
                'todo' => 'Go for a bike ride'
            ],
            [
                'id' => 19,
                'user_id' => 4,
                'todo' => 'Take a nap'
            ],
            [
                'id' => 20,
                'user_id' => 4,
                'todo' => 'Plan a vacation'
            ],
            [
                'id' => 21,
                'user_id' => 5,
                'todo' => 'Take a shower'
            ],
            [
                'id' => 22,
                'user_id' => 5,
                'todo' => 'Go to the gym'
            ],
            [
                'id' => 23,
                'user_id' => 5,
                'todo' => 'Pay the bills'
            ],
            [
                'id' => 24,
                'user_id' => 5,
                'todo' => 'Write in your journal'
            ],
            [
                'id' => 25,
                'user_id' => 5,
                'todo' => 'Practice a new skill'
            ],
            [
                'id' => 26,
                'user_id' => 6,
                'todo' => 'Organize your closet'
            ],
            [
                'id' => 27,
                'user_id' => 6,
                'todo' => 'Take a dance class'
            ],
            [
                'id' => 28,
                'user_id' => 6,
                'todo' => 'Volunteer at a local charity'
            ],
            [
                'id' => 29,
                'user_id' => 6,
                'todo' => 'Listen to a podcast'
            ],
            [
                'id' => 30,
                'user_id' => 6,
                'todo' => 'Visit a museum'
            ],
            [
                'id' => 31,
                'user_id' => 7,
                'todo' => 'Go for a hike'
            ],
            [
                'id' => 32,
                'user_id' => 7,
                'todo' => 'Take a cooking class'
            ],
            [
                'id' => 33,
                'user_id' => 7,
                'todo' => 'Finish a book'
            ],
            [
                'id' => 34,
                'user_id' => 7,
                'todo' => 'Get a haircut'
            ],
            [
                'id' => 35,
                'user_id' => 7,
                'todo' => 'Learn a new language'
            ],
            [
                'id' => 36,
                'user_id' => 8,
                'todo' => 'Play a musical instrument'
            ],
            [
                'id' => 37,
                'user_id' => 8,
                'todo' => 'Go to a concert'
            ],
            [
                'id' => 38,
                'user_id' => 8,
                'todo' => 'Take a photography class'
            ],
            [
                'id' => 39,
                'user_id' => 8,
                'todo' => 'Go on a road trip'
            ],
            [
                'id' => 40,
                'user_id' => 8,
                'todo' => 'Try a new restaurant'
            ],
            [
                'id' => 41,
                'user_id' => 9,
                'todo' => 'Watch the sunset'
            ],
            [
                'id' => 42,
                'user_id' => 9,
                'todo' => 'Visit a national park'
            ],
            [
                'id' => 43,
                'user_id' => 9,
                'todo' => 'Go to the beach'
            ],
            [
                'id' => 44,
                'user_id' => 9,
                'todo' => 'Take a pottery class'
            ],
            [
                'id' => 45,
                'user_id' => 9,
                'todo' => 'Write a short story'
            ],
            [
                'id' => 46,
                'user_id' => 10,
                'todo' => 'Go to a sports game'
            ],
            [
                'id' => 47,
                'user_id' => 10,
                'todo' => 'Take a hot air balloon ride'
            ],
            [
                'id' => 48,
                'user_id' => 10,
                'todo' => 'Visit a new city'
            ],
            [
                'id' => 49,
                'user_id' => 10,
                'todo' => 'Go to a wine tasting'
            ],
            [
                'id' => 50,
                'user_id' => 10,
                'todo' => 'Try skydiving'
            ],
        ];
    }

    public final function fillPostsTable(): array
    {

        return [
            [
                'id' => 1,
                'user_id' => 1,
                'heading' => 'Healthy Eating',
                'article' => 'Eating a healthy diet is important for maintaining good health. It can help you prevent
                 chronic diseases, manage your weight, and improve your overall well-being. To eat a healthy diet,
                  try to include a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats in your
                   meals. Avoid processed and high-sugar foods, and limit your intake of saturated and trans fats.'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'heading' => 'Time Management',
                'article' => 'Managing your time effectively is essential for achieving your goals. To manage your time
                 effectively, try to prioritize your tasks, set realistic deadlines, and avoid procrastination. Use
                  tools like calendars and to-do lists to help you stay organized and on track. Remember to take breaks
                   and give yourself time to recharge, as this can help you be more productive in the long run.'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'heading' => 'Stress Reduction',
                'article' => 'Stress can have a negative impact on your mental and physical health. To reduce stress,
                 try to identify your stressors and develop coping strategies to manage them. This can include exercise,
                  meditation, deep breathing, or talking to a friend or therapist. Remember to prioritize self-care and
                   give yourself time to relax and recharge.'
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'heading' => 'Financial Planning',
                'article' => 'Planning your finances is important for achieving financial security. To plan your
                 finances effectively, try to create a budget, track your expenses, and save money for emergencies
                  and long-term goals. Consider working with a financial advisor to help you develop a comprehensive
                   financial plan.'
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'heading' => 'Travel Tips',
                'article' => 'Traveling can be a great way to expand your horizons and experience new cultures. To make
                 the most of your travels, try to plan ahead and research your destination. Consider staying in local
                  accommodations and trying local cuisine to get a true taste of the culture. Remember to be respectful
                   of local customs and traditions.'
            ],
            [
                'id' => 6,
                'user_id' => 2,
                'heading' => 'Meditation',
                'article' => 'Meditation is a powerful tool for reducing stress and improving mental clarity. To start
                 meditating, find a quiet and comfortable space where you won\'t be disturbed. Close your eyes and focus
                  on your breath, or use a guided meditation app or video. Remember to be patient and consistent in your
                   practice.'
            ],
            [
                'id' => 7,
                'user_id' => 2,
                'heading' => 'Home Improvement',
                'article' => 'Improving your home can increase its value and make it more comfortable to live in.
                 To improve your home, consider making small upgrades like painting or replacing fixtures, or larger
                  renovations like a kitchen or bathroom remodel. Remember to set a budget and work with a reputable
                   contractor if needed.'
            ],
            [
                'id' => 8,
                'user_id' => 2,
                'heading' => 'Career Development',
                'article' => 'Developing your career can lead to greater job satisfaction and financial security.
                 To develop your career, consider taking courses or earning certifications in your field, networking
                  with professionals, and seeking out new opportunities. Remember to set goals and develop a plan to
                   achieve them.'
            ],
            [
                'id' => 9,
                'user_id' => 2,
                'heading' => 'Healthy Relationships',
                'article' => 'Having healthy relationships with others is important for your emotional well-being.
                 To build healthy relationships, try to communicate openly and honestly, show empathy and respect,
                  and set healthy boundaries. Remember to prioritize self-care and seek help if you need it.'
            ],
            [
                'id' => 10,
                'user_id' => 2,
                'heading' => 'Eco-Friendly Living',
                'article' => 'Living an eco-friendly lifestyle can help protect the environment and reduce your carbon
                 footprint. To live more sustainably, try to reduce your energy consumption, recycle and compost, and
                  use eco-friendly products. Consider using public transportation, biking, or walking instead of
                   driving when possible.'
            ],
            [
                'id' => 11,
                'user_id' => 3,
                'heading' => 'Fitness Tips',
                'article' => 'Staying fit and healthy is essential for maintaining good physical and mental health.
                 To stay fit, try to incorporate regular exercise into your routine, such as cardio, strength training,
                  or yoga. Eat a healthy diet and get enough sleep to support your fitness goals.'
            ],
            [
                'id' => 12,
                'user_id' => 3,
                'heading' => 'Home Cooking',
                'article' => 'Cooking at home can be a fun and rewarding way to eat healthy and save money. To cook
                 at home, try to plan your meals ahead of time, stock up on healthy ingredients, and experiment with
                  new recipes. Consider taking a cooking class or watching cooking tutorials to improve your skills.'
            ],
            [
                'id' => 13,
                'user_id' => 3,
                'heading' => 'Effective Communication',
                'article' => 'Effective communication is important for building strong relationships with others. To
                 communicate effectively, try to listen actively, express yourself clearly and assertively, and be
                  open to feedback. Avoid making assumptions and try to understand the other person\'s perspective.'
            ],
            [
                'id' => 14,
                'user_id' => 3,
                'heading' => 'Minimalism',
                'article' => 'Living a minimalist lifestyle can help you simplify your life and focus on what truly
                 matters. To live minimally, try to declutter your possessions, simplify your schedule, and focus on
                  experiences rather than material possessions. Remember to prioritize self-care and focus on what
                   makes you happy.'
            ],
            [
                'id' => 15,
                'user_id' => 3,
                'heading' => 'Personal Finance',
                'article' => 'Managing your personal finances is important for achieving financial security and
                 independence. To manage your finances effectively, try to create a budget, track your expenses,
                  and save money for emergencies and long-term goals. Consider working with a financial advisor
                   to help you develop a comprehensive financial plan.'
            ],
            [
                'id' => 16,
                'user_id' => 4,
                'heading' => 'Learning a New Skill',
                'article' => 'Learning a new skill can help you stay mentally sharp and expand your horizons. To learn 
                 a new skill, consider taking a class or workshop, practicing regularly, and seeking out feedback and
                  guidance. Remember to be patient with yourself and enjoy the learning process.'
            ],
            [
                'id' => 17,
                'user_id' => 4,
                'heading' => 'Home Office Setup',
                'article' => 'Setting up a home office can increase your productivity and improve your work-life
                 balance. To set up a home office, try to find a quiet and comfortable space, invest in ergonomic
                  furniture and equipment, and minimize distractions. Remember to take breaks and maintain a healthy
                   work-life balance.'
            ],
            [
                'id' => 18,
                'user_id' => 4,
                'heading' => 'Creative Writing',
                'article' => 'Creative writing can be a fun and rewarding way to express yourself and tap into your
                 creativity. To start writing creatively, try to find inspiration in your surroundings, experiment
                  with different writing styles and genres, and practice regularly. Consider joining a writing group
                   or workshop to get feedback and support.'
            ],
            [
                'id' => 19,
                'user_id' => 4,
                'heading' => 'Personal Growth',
                'article' => 'Focusing on personal growth can help you become the best version of yourself. To focus on
                 personal growth, try to set goals, develop new habits, and seek out new experiences. Consider working
                  with a life coach or therapist to help you identify areas for growth and develop a plan to achieve
                   your goals.'
            ],
            [
                'id' => 20,
                'user_id' => 4,
                'heading' => 'Healthy Habits',
                'article' => 'Developing healthy habits can improve your overall well-being and lead to a happier life.
                 To develop healthy habits, try to incorporate regular exercise into your routine, eat a balanced diet,
                  get enough sleep, and practice stress management techniques. Remember to be patient with yourself and
                   focus on progress, not perfection.'
            ],
            [
                'id' => 21,
                'user_id' => 5,
                'heading' => 'Social Media',
                'article' => 'Using social media can be a fun and rewarding way to connect with others and share your
                 experiences. To use social media effectively, try to identify your target audience, create engaging
                  content, and interact with your followers. Remember to maintain a professional image and protect your
                   privacy.'
            ],
            [
                'id' => 22,
                'user_id' => 5,
                'heading' => 'Home Renovation',
                'article' => 'Renovating your home can increase its value and improve its functionality. To renovate
                 your home, try to identify areas for improvement, set a budget, and hire reliable contractors.
                  Remember to prioritize safety and functionality over aesthetics.'
            ],
            [
                'id' => 23,
                'user_id' => 5,
                'heading' => 'Public Speaking',
                'article' => 'Improving your public speaking skills can help you succeed in your career and personal
                 life. To improve your public speaking skills, try to identify your strengths and weaknesses, practice
                  regularly, and seek feedback and guidance. Consider joining a public speaking group or taking a class
                   to improve your skills.'
            ],
            [
                'id' => 24,
                'user_id' => 5,
                'heading' => 'Self-Care',
                'article' => 'Practicing self-care is important for maintaining good mental and physical health.
                 To practice self-care, try to prioritize your needs, set boundaries, and engage in activities that
                  bring you joy and relaxation. Remember to avoid burnout by taking breaks and seeking support when
                   needed.'
            ],
            [
                'id' => 25,
                'user_id' => 5,
                'heading' => 'Investing',
                'article' => 'Investing your money wisely can help you achieve financial security and independence.
                 To invest wisely, try to educate yourself on different investment options, set financial goals, and
                  seek guidance from a financial advisor. Remember to diversify your investments and avoid high-risk
                   investments.'
            ],
            [
                'id' => 26,
                'user_id' => 6,
                'heading' => 'Yoga',
                'article' => 'Practicing yoga can help you reduce stress, increase flexibility, and improve your overall
                 health. To start practicing yoga, try to find a class or teacher that suits your needs and preferences,
                  invest in comfortable clothing and equipment, and practice regularly. Remember to listen to your body
                   and avoid pushing yourself too hard.'
            ],
            [
                'id' => 27,
                'user_id' => 6,
                'heading' => 'Interior Design',
                'article' => 'Improving your home\'s interior design can make it more comfortable and visually appealing.
                 To improve your home\'s interior design, try to identify your personal style and preferences, invest in
                  quality furniture and decor, and consider hiring an interior designer. Remember to prioritize 
                   functionality and comfort over aesthetics.'
            ],
            [
                'id' => 28,
                'user_id' => 6,
                'heading' => 'Networking',
                'article' => 'Networking is important for building professional relationships and finding new career
                 opportunities. To network effectively, try to attend industry events, connect with professionals online,
                  and seek out mentorship and guidance. Remember to maintain a professional image and follow up with
                   contacts.'
            ],
            [
                'id' => 29,
                'user_id' => 6,
                'heading' => 'Creativity',
                'article' => 'Tapping into your creativity can help you find new solutions to problems and achieve
                 greater success. To tap into your creativity, try to engage in activities that inspire you, experiment
                  with new ideas and approaches, and seek out feedback and support. Remember to embrace failure as a
                   natural part of the creative process.'
            ],
            [
                'id' => 30,
                'user_id' => 6,
                'heading' => 'Mental Health',
                'article' => 'Taking care of your mental health is important for your overall well-being and happiness.
                 To take care of your mental health, try to identify your stressors, practice self-care, and seek 
                  professional help when needed. Remember to prioritize your mental health and make it a part of your
                   daily routine.'
            ],
            [
                'id' => 31,
                'user_id' => 7,
                'heading' => 'Travel Planning',
                'article' => 'Planning your next vacation can be a fun and exciting way to explore new destinations and
                 create new memories. To plan your next vacation, try to identify your budget, travel preferences, and 
                  desired destinations. Remember to research your options and make reservations in advance.'
            ],
            [
                'id' => 32,
                'user_id' => 7,
                'heading' => 'Home Security',
                'article' => 'Improving your home\'s security can help you feel safer and more comfortable in your home.
                 To improve your home\'s security, try to identify potential vulnerabilities, install high-quality locks
                  and alarm systems, and consider hiring a security professional. Remember to practice good habits like
                   locking doors and windows, and not sharing personal information online.'
            ],
            [
                'id' => 33,
                'user_id' => 7,
                'heading' => 'Negotiation Skills',
                'article' => 'Improving your negotiation skills can help you achieve your goals and succeed in your
                 personal and professional life. To improve your negotiation skills, try to identify your goals and
                  desired outcomes, research the other party, and practice active listening and effective communication.
                   Remember to stay calm and flexible during negotiations.'
            ],
            [
                'id' => 34,
                'user_id' => 7,
                'heading' => 'Mindfulness',
                'article' => 'Practicing mindfulness can help you reduce stress, increase focus, and improve your 
                 overall well-being. To practice mindfulness, try to focus on the present moment, practice deep breathing
                  and meditation, and engage in activities that bring you joy and relaxation. Remember to be patient and
                   kind to yourself during the process.'
            ],
            [
                'id' => 35,
                'user_id' => 7,
                'heading' => 'Entrepreneurship',
                'article' => 'Starting your own business can be a challenging but rewarding way to achieve financial
                 independence and personal fulfillment. To start your own business, try to identify a market need,
                  develop a business plan, and seek funding and guidance. Remember to be patient and persistent, and
                   seek out mentorship and support.'
            ],
            [
                'id' => 36,
                'user_id' => 8,
                'heading' => 'Photography',
                'article' => 'Photography can be a fun and rewarding way to capture and share your experiences with 
                 others. To get started with photography, invest in a quality camera and equipment, practice regularly,
                  and seek out feedback and guidance. Remember to experiment with different techniques and styles, 
                   and have fun!'
            ],
            [
                'id' => 37,
                'user_id' => 8,
                'heading' => 'Home Automation',
                'article' => 'Automating your home can make it more comfortable, convenient, and energy-efficient.
                 To automate your home, identify your needs and preferences, invest in smart devices and systems, 
                  and research compatibility and security risks. Remember to prioritize safety and functionality 
                   over convenience.'
            ],
            [
                'id' => 38,
                'user_id' => 8,
                'heading' => 'Career Change',
                'article' => 'Changing your career can be a challenging but rewarding way to find greater fulfillment 
                 and financial success. To change your career, identify your interests and skills, research potential
                  career paths, and seek out training and education opportunities. Remember to be patient and persistent,
                   and seek out mentorship and support.'
            ],
            [
                'id' => 39,
                'user_id' => 8,
                'heading' => 'Leadership',
                'article' => 'Developing your leadership skills can help you succeed in your career and personal life.
                 To develop your leadership skills, identify your strengths and weaknesses, seek out mentorship and 
                  guidance, and practice effective communication and decision-making. Remember to prioritize 
                   collaboration and inclusivity in your leadership style.'
            ],
            [
                'id' => 40,
                'user_id' => 8,
                'heading' => 'Volunteering',
                'article' => 'Volunteering can be a fun and rewarding way to give back to your community and make a
                 difference in the world. Whether you volunteer at a local charity, help out at a community event,
                  or donate your time and skills to a cause you care about, you can make a positive impact on the 
                   people and organizations around you.'
            ],
            [
                'id' => 41,
                'user_id' => 9,
                'heading' => 'DIY Projects',
                'article' => 'Doing DIY projects can be a fun and rewarding way to improve your home and save money.
                 Whether you want to update your decor, tackle a home improvement project, or create something from
                  scratch, there are plenty of DIY options to choose from. With a little creativity and some basic
                   tools and materials, you can create something unique and personalized for your home.'
            ],
            [
                'id' => 42,
                'user_id' => 9,
                'heading' => 'Healthy Sleep Habits',
                'article' => 'Getting enough sleep and developing healthy sleep habits is important for maintaining
                 good physical and mental health. It can improve your mood, boost your immune system, and help you 
                  feel more alert and productive during the day. To develop healthy sleep habits, try to stick to a 
                   regular sleep schedule, create a relaxing sleep environment, and avoid caffeine and electronics
                    before bedtime.'
            ],
            [
                'id' => 43,
                'user_id' => 9,
                'heading' => 'Conflict Resolution',
                'article' => 'Learning how to resolve conflicts effectively can help you build stronger relationships
                 with others. Some effective conflict resolution strategies include active listening, compromise, and 
                  finding common ground. It can also be helpful to focus on the problem at hand, rather than attacking
                   the other person, and to try to stay calm and respectful during the conversation.'
            ],
            [
                'id' => 44,
                'user_id' => 9,
                'heading' => 'Emotional Intelligence',
                'article' => 'Developing your emotional intelligence can help you succeed in your personal and 
                 professional life. Emotional intelligence involves being aware of your own emotions and the emotions
                  of others, and being able to manage those emotions effectively. Some ways to improve your emotional
                   intelligence include practicing empathy, developing your communication skills, and learning how to
                    manage stress and anxiety.'
            ],
            [
                'id' => 45,
                'user_id' => 9,
                'heading' => 'Investing in Yourself',
                'article' => 'Investing in yourself through education and personal development can lead to greater 
                 success and fulfillment in life. Whether you pursue a degree or certification, attend workshops and 
                  seminars, or seek out other learning opportunities, you can gain valuable skills and knowledge that
                   can help you achieve your goals and improve your life.'
            ],
            [
                'id' => 46,
                'user_id' => 10,
                'heading' => 'Healthy Snacking',
                'article' => 'Choosing healthy snacks can help you maintain a healthy diet and avoid unhealthy cravings.
                 Some healthy snack options include fresh fruit, vegetables with hummus or yogurt dip, nuts and seeds,
                  and whole grain crackers with cheese or nut butter. By incorporating more healthy snacks into your 
                   diet, you can improve your overall health and well-being.'
            ],
            [
                'id' => 47,
                'user_id' => 10,
                'heading' => 'Green Living',
                'article' => 'Living a green lifestyle can help you reduce your environmental impact and promote 
                 sustainability. Some green living habits include reducing your energy and water usage, recycling 
                  and composting, using eco-friendly products, and supporting sustainable businesses. By making small 
                   changes to your lifestyle, you can help make a big difference for the planet.'
            ],
            [
                'id' => 48,
                'user_id' => 10,
                'heading' => 'Time for Yourself',
                'article' => 'Taking time for yourself is important for reducing stress and improving your overall
                 well-being. Whether you enjoy reading, taking a relaxing bath, practicing yoga or meditation, or 
                  pursuing a hobby, make sure to carve out time in your schedule for activities that bring you joy and 
                   help you recharge.'
            ],
            [
                'id' => 49,
                'user_id' => 10,
                'heading' => 'Positive Thinking',
                'article' => 'Practicing positive thinking can help you overcome challenges and achieve greater success
                 in life. Some ways to cultivate a positive mindset include focusing on your strengths, practicing
                  gratitude, surrounding yourself with positive people, and refraining negative thoughts into positive 
                   ones. By adopting a positive attitude, you can improve your mental and emotional well-being and 
                    achieve your goals.'
            ],
            [
                'id' => 50,
                'user_id' => 10,
                'heading' => 'Mindful Eating',
                'article' => 'Practicing mindful eating can help you develop a healthier relationship with food and 
                 improve your overall well-being. Some tips for mindful eating include paying attention to your hunger 
                  and fullness cues, eating slowly and savoring your food, and avoiding distractions while eating. 
                   By being more mindful about your eating habits, you can enjoy your food more and make healthier 
                    choices for your body.'
            ],
        ];
    }

    public final function fillCommentsTable(): array
    {
        return  [
            [
                'id' => 1,
                'user_id' => 1,
                'post_id' => 42,
                'comment' => 'Great read! I never realized how much my phone was affecting my sleep until I read this
                    article. I\'ll definitely be implementing some of these tips.'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'post_id' => 23,
                'comment' => 'This article is so relatable. I struggle with anxiety and it can be tough to manage.
                    I appreciate the tips provided here and will definitely be trying them out.'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'post_id' => 9,
                'comment' => 'I\'ve been trying to cut down on my sugar intake, but it can be tough. These tips are
                    really helpful and I\'ll definitely be using them!'
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'post_id' => 50,
                'comment' => 'This article was really insightful. I never realized how much our diets can affect our
                    mental health. Thank you for sharing!'
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'post_id' => 28,
                'comment' => 'I\'ve been wanting to start a meditation practice, but didn\'t know where to start. 
                    This article is a great resource for beginners. Thank you!'
            ],
            [
                'id' => 6,
                'user_id' => 2,
                'post_id' => 16,
                'comment' => 'I\'m always looking for healthy snack ideas, and these are great! The roasted chickpeas
                    are my favorite.'
            ],
            [
                'id' => 7,
                'user_id' => 2,
                'post_id' => 20,
                'comment' => 'I\'ve been wanting to start a yoga practice, but didn\'t know where to begin. This 
                    article is a great starting point. Thank you!'
            ],
            [
                'id' => 8,
                'user_id' => 2,
                'post_id' => 3,
                'comment' => 'Great article! I completely agree with everything you said about mindful eating.'
            ],
            [
                'id' => 9,
                'user_id' => 2,
                'post_id' => 38,
                'comment' => 'I struggle with perfectionism and it can be really tough. These tips are helpful and 
                    I\'ll definitely be using them!'
            ],
            [
                'id' => 10,
                'user_id' => 2,
                'post_id' => 14,
                'comment' => 'I\'ve been wanting to try acupuncture, but was a little unsure about it. This article 
                    is really informative and has convinced me to give it a try!'
            ],
            [
                'id' => 11,
                'user_id' => 3,
                'post_id' => 31,
                'comment' => 'I never realized how much our gut health can affect our overall health. Thank you
                    for sharing this information!'
            ],
            [
                'id' => 12,
                'user_id' => 3,
                'post_id' => 45,
                'comment' => 'I\'ve been wanting to try journaling, but didn\'t know where to start. These prompts
                    are really helpful. Thank you!'
            ],
            [
                'id' => 13,
                'user_id' => 3,
                'post_id' => 8,
                'comment' => 'I\'ve been struggling with anxiety for a while, and these tips are really helpful. 
                    Thank you for sharing!'
            ],
            [
                'id' => 14,
                'user_id' => 3,
                'post_id' => 29,
                'comment' => 'I\'ve been wanting to try green smoothies, but didn\'t know where to start. 
                    These recipes are great. Thank you!'
            ],
            [
                'id' => 15,
                'user_id' => 3,
                'post_id' => 39,
                'comment' => 'I never realized how much our thoughts can affect our mood. These tips are really helpful.
                    Thank you!'
            ],
            [
                'id' => 16,
                'user_id' => 4,
                'post_id' => 5,
                'comment' => 'I\'ve been trying to incorporate more plant-based meals into my diet, and these 
                    recipes are great. Thank you!'
            ],
            [
                'id' => 17,
                'user_id' => 4,
                'post_id' => 36,
                'comment' => 'I\'ve been wanting to try aromatherapy, but didn\'t know where to start. This article
                    is really informative. Thank you!'
            ],
            [
                'id' => 18,
                'user_id' => 4,
                'post_id' => 22,
                'comment' => 'I struggle with self-care, and these tips are really helpful. Thank you for sharing!'
            ],
            [
                'id' => 19,
                'user_id' => 4,
                'post_id' => 18,
                'comment' => 'I\'ve been wanting to try a digital detox, but didn\'t know where to start. These tips 
                    are really helpful. Thank you!'
            ],
            [
                'id' => 20,
                'user_id' => 4,
                'post_id' => 19,
                'comment' => 'I struggle with stress management, and these tips are really helpful. Thank you for
                    sharing!'
            ],
            [
                'id' => 21,
                'user_id' => 5,
                'post_id' => 12,
                'comment' => 'I\'ve been wanting to try a gratitude practice, but didn\'t know where to start. These 
                    prompts are really helpful. Thank you!'
            ],
            [
                'id' => 22,
                'user_id' => 5,
                'post_id' => 25,
                'comment' => 'I love the idea of mindful eating, but it can be tough to put it into practice. Do you
                    have any tips for staying mindful throughout the day?'
            ],
            [
                'id' => 23,
                'user_id' => 5,
                'post_id' => 4,
                'comment' => 'I\'ve been wanting to try a yoga retreat, and this one sounds amazing. Thank you for
                    sharing!'
            ],
            [
                'id' => 24,
                'user_id' => 5,
                'post_id' => 43,
                'comment' => 'I struggle with insomnia, and these tips are really helpful. Thank you for sharing!'
            ],
            [
                'id' => 25,
                'user_id' => 5,
                'post_id' => 33,
                'comment' => 'I never realized how much our environment can affect our mental health. Thank you for 
                    sharing this information!'
            ],
            [
                'id' => 26,
                'user_id' => 6,
                'post_id' => 1,
                'comment' => 'I\'ve been wanting to try a vegan diet, and these recipes are great. Thank you!'
            ],
            [
                'id' => 27,
                'user_id' => 6,
                'post_id' => 30,
                'comment' => 'I never realized how much our posture can affect our health. These tips are really
                    helpful. Thank you!'
            ],
            [
                'id' => 28,
                'user_id' => 6,
                'post_id' => 26,
                'comment' => 'I struggle with negative self-talk, and these tips are really helpful. Thank you for 
                    sharing!'
            ],
            [
                'id' => 29,
                'user_id' => 6,
                'post_id' => 48,
                'comment' => 'I\'ve been wanting to try a sound bath, and this one sounds amazing. Thank you
                    for sharing!'
            ],
            [
                'id' => 30,
                'user_id' => 6,
                'post_id' => 24,
                'comment' => 'I never realized how much our breathing can affect our mental health. Thank you for 
                    sharing this information!'
            ],
            [
                'id' => 31,
                'user_id' => 7,
                'post_id' => 2,
                'comment' => 'I\'ve been wanting to try a juice cleanse, and these recipes are great. Thank you!'
            ],
            [
                'id' => 32,
                'user_id' => 7,
                'post_id' => 11,
                'comment' => 'I struggle with self-doubt, and these tips are really helpful. Thank you for sharing!'
            ],
            [
                'id' => 33,
                'user_id' => 7,
                'post_id' => 44,
                'comment' => 'I\'ve been wanting to try a float tank, and this one sounds amazing. Thank you for 
                    sharing!'
            ],
            [
                'id' => 34,
                'user_id' => 7,
                'post_id' => 27,
                'comment' => 'I\'ve been wanting to try a morning routine, but didn\'t know where to start. This 
                    article is really helpful. Thank you!'
            ],
            [
                'id' => 35,
                'user_id' => 7,
                'post_id' => 15,
                'comment' => 'I\'ve been wanting to try a vegan dessert, and these recipes are great. Thank you!'
            ],
            [
                'id' => 36,
                'user_id' => 8,
                'post_id' => 6,
                'comment' => 'I\'ve been wanting to try a HIIT workout, and this one sounds challenging. Thank you 
                    for sharing!'
            ],
            [
                'id' => 37,
                'user_id' => 8,
                'post_id' => 46,
                'comment' => 'I struggle with procrastination, and these tips are really helpful. Thank you for 
                    sharing!'
            ],
            [
                'id' => 38,
                'user_id' => 8,
                'post_id' => 41,
                'comment' => 'I\'ve been wanting to try a vegan burger, and this recipe is great. Thank you!'
            ],
            [
                'id' => 39,
                'user_id' => 8,
                'post_id' => 37,
                'comment' => 'I never realized how much our digital devices can affect our mental health. 
                    Thank you for sharing this information!'
            ],
            [
                'id' => 40,
                'user_id' => 8,
                'post_id' => 17,
                'comment' => 'I\'ve been wanting to try a green juice, and these recipes are great. Thank you!'
            ],
            [
                'id' => 41,
                'user_id' => 9,
                'post_id' => 13,
                'comment' => 'I struggle with burnout, and these tips are really helpful. Thank you for sharing!'
            ],
            [
                'id' => 42,
                'user_id' => 9,
                'post_id' => 32,
                'comment' => 'I never realized how much our hobbies can affect our mental health. Thank you for
                    sharing this information!'
            ],
            [
                'id' => 43,
                'user_id' => 9,
                'post_id' => 49,
                'comment' => 'I\'ve been wanting to try a reiki session, and this one sounds amazing. Thank you
                    for sharing!'
            ],
            [
                'id' => 44,
                'user_id' => 9,
                'post_id' => 21,
                'comment' => 'I struggle with motivation, and these tips are really helpful. Thank you for sharing!'
            ],
            [
                'id' => 45,
                'user_id' => 9,
                'post_id' => 7,
                'comment' => 'I\'ve been wanting to try a pilates workout, and this one sounds challenging.
                    Thank you for sharing!'
            ],
            [
                'id' => 46,
                'user_id' => 10,
                'post_id' => 35,
                'comment' => 'I never realized how much our sleep can affect our mental health. Thank you for sharing
                    this information!'
            ],
            [
                'id' => 47,
                'user_id' => 10,
                'post_id' => 40,
                'comment' => 'I\'ve been wanting to try a vegan pizza, and this recipe is great. Thank you!'
            ],
            [
                'id' => 48,
                'user_id' => 10,
                'post_id' => 34,
                'comment' => 'I never realized how much our relationships can affect our mental health. Thank you 
                    for sharing this information!'
            ],
            [
                'id' => 49,
                'user_id' => 10,
                'post_id' => 10,
                'comment' => 'I\'ve been wanting to try a sound healing, and this one sounds amazing. Thank you for
                    sharing!'
            ],
            [
                'id' => 50,
                'user_id' => 10,
                'post_id' => 47,
                'comment' => 'I\'ve been struggling with my relationship with food for a while, but reading this
                    article has given me some great tips to try. Thank you!'
            ],
        ];
    }
}
