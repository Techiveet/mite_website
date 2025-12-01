<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }



    public function portfolioDetail($slug)
    {
        // In a real app, this data would come from a Database.
        // For now, we define it here to keep it simple.
        $portfolios = [
            'factory-turnaround' => [
                'title' => 'Factory Turnaround',
                'subtitle' => 'Restructuring a loss-making textile plant into profitability.',
                'role' => 'General Manager',
                'sector' => 'Manufacturing',
                'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1200&auto=format&fit=crop',
                'challenges' => 'The plant was facing a 20% loss year-over-year due to inefficient workflows and machine downtime.',
                'actions' => [
                    'Implemented Kaizen manufacturing principles.',
                    'Renegotiated supplier contracts saving 15%.',
                    'Restructured shift patterns for 24/7 operation.'
                ],
                'results' => [
                    'Achieved profitability within 18 months.',
                    'Increased output by 35%.',
                    'Reduced waste by 12%.'
                ]
            ],
            'digital-transition' => [
                'title' => 'Digital Transition of Licensing Bureau',
                'subtitle' => 'Moving government archives to the cloud.',
                'role' => 'Director of Operations',
                'sector' => 'Government',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop',
                'challenges' => 'Heavy reliance on manual records leading to lost files and corruption.',
                'actions' => [
                    'Mapped existing processes and removed redundancy.',
                    'Introduced barcode tracking.',
                    'Trained 50+ staff members.'
                ],
                'results' => [
                    'Cut processing time by 40%.',
                    'Enabled clean audits.',
                    'Improved citizen satisfaction.'
                ]
            ],
            'export-logistics' => [
                'title' => 'Coffee Export Logistics Optimization',
                'subtitle' => 'Optimizing supply chains from Jimma to Djibouti.',
                'role' => 'Supply Chain Lead',
                'sector' => 'Agro-export',
                'image' => 'https://images.unsplash.com/photo-1664575602554-208c7a2643b9?q=80&w=1200&auto=format&fit=crop',
                'challenges' => 'Unreliable lead times and high demurrage costs.',
                'actions' => [
                    'Standardized shipment windows.',
                    'Shared tracking templates.',
                    'Aligned customs documentation workflows.'
                ],
                'results' => [
                    'Reduced lead time by 7 days.',
                    'Lowered demurrage costs significantly.',
                    'Improved buyer reliability ratings.'
                ]
            ]
        ];

        if (!array_key_exists($slug, $portfolios)) {
            abort(404);
        }

        return view('portfolio.show', ['project' => $portfolios[$slug]]);
    }

   public function trainings()
    {
        $certifications = [
            [
                'category' => 'leadership',
                'title' => 'Project Management Professional (PMP)',
                'org' => 'Project Management Institute (PMI)',
                'description' => 'Advanced methodologies in agile practices, risk management, and strategic execution.',
                'year' => '2023',
                'location' => 'Global',
                'icon' => 'fas fa-tasks',
                'color_class' => 'icon-gold',
                'tags' => ['Agile', 'Risk Mgmt'],
                // ADD IMAGE PATH HERE
                'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=1000&auto=format&fit=crop'
            ],
            [
                'category' => 'leadership',
                'title' => 'Strategic Leadership Executive Program',
                'org' => 'Harvard Business School Online',
                'description' => 'Executive training focused on organizational alignment and change management.',
                'year' => '2022',
                'location' => 'Online',
                'icon' => 'fas fa-users-cog',
                'color_class' => 'icon-blue',
                'tags' => ['Strategy', 'Change Mgmt'],
                'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=1000&auto=format&fit=crop'
            ],
            [
                'category' => 'technical',
                'title' => 'Data Analytics for Managers',
                'org' => 'London School of Economics',
                'description' => 'Leveraging data for strategic decisions, KPI tracking, and performance forecasting.',
                'year' => '2021',
                'location' => 'UK',
                'icon' => 'fas fa-chart-pie',
                'color_class' => 'icon-green',
                'tags' => ['Analytics', 'Tableau'],
                'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=1000&auto=format&fit=crop'
            ],
            // ... Add 'image' to the rest of your items ...
        ];

        return view('trainings', compact('certifications'));
    }
    public function services()
    {
        $services = [
            [
                'id' => 'strategy',
                'title' => 'Strategic Planning & Vision',
                'icon' => 'fas fa-chess-queen',
                'color' => 'gold', // matches CSS class
                'description' => 'Translating organizational goals into actionable 5-year roadmaps. I help businesses and bureaus move from reactive management to proactive growth.',
                'offerings' => [
                    'Corporate Strategy Formulation',
                    'Market Entry & Feasibility Studies',
                    'Organizational Restructuring',
                    'KPI & Performance Management Systems (BSC)'
                ]
            ],
            [
                'id' => 'policy',
                'title' => 'Government Relations & Policy',
                'icon' => 'fas fa-university',
                'color' => 'green',
                'description' => 'Navigating the complex regulatory landscape of Ethiopia. I bridge the gap between private sector interests and public sector mandates.',
                'offerings' => [
                    'Regulatory Compliance Audits',
                    'Public-Private Partnership (PPP) Structuring',
                    'Policy Advocacy & Negotiation',
                    'Tax Law & Investment Proclamation Advisory'
                ]
            ],
            [
                'id' => 'operations',
                'title' => 'Operational Excellence',
                'icon' => 'fas fa-cogs',
                'color' => 'red',
                'description' => 'Optimizing the engine of your organization. I implement global manufacturing and management standards to reduce waste and boost output.',
                'offerings' => [
                    'Kaizen & Lean Management Implementation',
                    'Supply Chain & Logistics Optimization',
                    'Business Process Re-engineering (BPR)',
                    'Cost Reduction & Efficiency Analysis'
                ]
            ]
        ];

        return view('services', compact('services'));
    }
public function education()
    {
        $education = [
            [
                'degree' => 'M.A. Urban Management',
                'school' => 'Ethiopian Civil Service University',
                'year' => '2011',
                'location' => 'Addis Ababa',
                'type' => 'Masters',
                'description' => 'Graduate-level training focused on urban transport systems governance.',
                // ADD THIS LINE (Replace with your actual image paths later, e.g., '/images/certs/masters.jpg')
                'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=1000&auto=format&fit=crop'
            ],
            [
                'degree' => 'B.A. History (Minor: Geography)',
                'school' => 'Addis Ababa University',
                'year' => '2006',
                'location' => 'Addis Ababa',
                'type' => 'Bachelors',
                'description' => 'Built strong analytical and research skills to understand socio-economic dynamics.',
                'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=1000&auto=format&fit=crop'
            ],
            [
                'degree' => 'Diploma, History',
                'school' => 'Kotebe Metropolitan University',
                'year' => '1999',
                'location' => 'Addis Ababa',
                'type' => 'Diploma',
                'description' => 'Foundation in social sciences and geography.',
                'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=1000&auto=format&fit=crop'
            ]
        ];

        return view('education', compact('education'));
    }
}
