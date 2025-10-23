import { MessageCircle } from "lucide-react";
import { Button } from "@/components/ui/button";
import profileImage from "@/assets/willian-profile.jpeg";

const Index = () => {
  const handleWhatsAppClick = () => {
    // Substitua pelo link real do grupo de WhatsApp
    window.open("https://chat.whatsapp.com/seu-link-aqui", "_blank");
  };

  return (
    <div className="min-h-screen bg-background flex items-center justify-center p-6">
      <div className="max-w-md w-full text-center space-y-8">
        {/* Profile Image */}
        <div className="flex justify-center">
          <div className="relative">
            <div className="w-32 h-32 rounded-full overflow-hidden border-4 border-primary shadow-2xl shadow-primary/20">
              <img 
                src={profileImage} 
                alt="Willian Tressmann" 
                className="w-full h-full object-cover"
              />
            </div>
            <div className="absolute inset-0 rounded-full bg-primary/10 animate-pulse-slow"></div>
          </div>
        </div>

        {/* Title */}
        <div className="space-y-2">
          <h1 className="text-4xl font-bold text-foreground tracking-tight">
            Achados EVOLUWILL
          </h1>
        </div>

        {/* Description */}
        <p className="text-lg text-muted-foreground leading-relaxed px-4">
          Os melhores descontos para quem acompanha Willian Tressmann nas redes sociais.
        </p>

        {/* WhatsApp Button */}
        <div className="pt-4">
          <Button 
            onClick={handleWhatsAppClick}
            size="lg"
            className="w-full bg-whatsapp hover:bg-whatsapp-dark text-primary-foreground font-bold text-lg py-7 rounded-2xl shadow-xl shadow-whatsapp/30 animate-pulse-slow transition-all hover:scale-105 hover:shadow-2xl hover:shadow-whatsapp/50"
          >
            <MessageCircle className="w-6 h-6 mr-3" />
            Entrar no grupo
          </Button>
        </div>

        {/* Footer Text */}
        <p className="text-sm text-muted-foreground/80 px-6 pt-4">
          Diariamente, diversos produtos com grandes descontos em marcas como Nike, Adidas, New Balance, entre outros!
        </p>
      </div>
    </div>
  );
};

export default Index;
